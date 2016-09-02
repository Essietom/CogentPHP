<?php

    
    require "application/system/Controller.php";

    /**
    * The about page controller
    */
    class AboutController extends Gent_Controller
    {
        private $modelObj;


        function __construct( $model )
        {
            $this->modelObj = $model;
            


        }


        public function current()
        {
            return $this->modelObj->message = "About us today changed by aboutController.";
        }

        public function holidays()
        {
            return $this->modelObj->data;
        }
     }