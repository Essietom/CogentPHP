<?php

require "../vendor/autoload.php";
use Opis\Database\Database;
use Opis\Database\Connection;

$connection = new Connection('mysql:host=localhost;dbname=gentphp', 'root', '');

Class App
{

	public $load;
	public $template;

	function __construct($param)
	{
		$this->template = $param;
	}

	public function View($template_name, $data = array())
	{
		$loader = new Twig_Loader_Filesystem($this->template);
            $twig = new Twig_Environment($loader);

		$template = $twig->loadTemplate($template_name);
		echo $template->render($data);
	}
}

$db = new Database($connection);

$result = $db->from('users')
             ->select()
             ->all();

$data = array('data' =>  $result);
$temp = new App('../templates');
$temp->View('index.html', $data);	