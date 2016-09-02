<?php

require "vendor/autoload.php";

Class App
{

	public $load;
	public $template;

	function __construct()
	{
		// $this->template = $param;
	}

	public function View($template_name, $data = array())
	{
		$loader = new Twig_Loader_Filesystem('templates');
            $twig = new Twig_Environment($loader, array(
                'cache' => 'cache',
            ));

		$template = $twig->loadTemplate($template_name);
		echo $template->render($data);
	}
}
