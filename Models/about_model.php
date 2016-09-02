<?php

    /**
    * The about page model
    */
    class AboutModel
    {

        private $message;
        public $data;

        public function __construct()
        {
            $this->message = "Welcome to the of PHP MVC framework official site.";
            $this->data;
            
        }

        public function nowADays()
        {
            return $this->message = "nowadays everybody wants to be a boss.";
        }
        public function getHolidays()
        {
            
            $data = ['Hello','Hi'];
            $this->data = $data;
            return $this->data;
            
        }
    }