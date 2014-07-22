<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bootstrap {

    function __construct() {
        
        $url = rtrim($_GET['url'], '/');

        $url = explode('/', $url);
//        print_r($url);
//        echo '<br />';

        $file = 'controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require_once $file;
            
        } else {
            require_once 'controllers/error.php';
            $controller = new Error;
            return false;            
        }
        
        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);

        } elseif (isset($url[1])) {
            $controller->{$url[1]}();
        }
        
    }

}
