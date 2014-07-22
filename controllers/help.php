<?php

class Help extends Controller {

    public function __construct() {
        parent::__construct();
        echo "in help constructor<br />";
    }
    
    public function other( $param=null ) {
        print "in other ({$param}) method <br />";
        
        require_once 'model/help_model.php';
        $model = new Help_Model();
        
    }

}

