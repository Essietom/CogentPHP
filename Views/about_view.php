<?php

require "application/system/app.php";
    /**
    * The about page view
    */
    class AboutView extends App
    {

        private $modelObj;

        private $controller;


        function __construct($controller, $model)
        {

            $this->controller = $controller;
            $this->modelObj = $model;
            print "About - ";
        }

        public function index()
        {
            // return $this->modelObj->nowADays();
            $data = array('name' => 'Williams Isaac', 'position' => ' Original Disturber to Dominion');
            $this->View('index.html', $data);
        }

        public function today()
        {
            return $this->controller->current();
            
        }

        public function holiday()
        {
            foreach ($this->controller->holidays() as $key ) {
                
                print_r($key);
            }
        }




    }