<?php
/**
 *
 */

//Turn On error reporting
ini_set('display_errors', 1);
error_reporting(E_All);

//Require autoload file
require_once ('vendor/autoload.php');

//Create an instance of Base class
$f3 = Base::instance();

//Define Default route
$f3->route('GET /', function() {
    echo '<h1>Hello World</h1>';
});


//Run Fat-Free
$f3->run();