<?php
/**
 * @author Shayna Jamieson, Bridget Black
 * @version 1.0
 * URL: http://sjamieson.greenriverdev.com/328/pets2/index.php
 * Date: January 24, 2020
 */

// start a session - ONLY ever need to put this in our controller (all other pages get by transference)
//session_start();


// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require("vendor/autoload.php");

// instantiate F3
$f3 = Base::instance(); // invoke static

// define a default route
// when the user navigates to the route directory of the project
// this is what they should see
$f3->route('GET /', function() {

    echo "<h1>My Pets</h1>";
    echo "<a href='order'>Order a Pet</a>";

    // create a new view object by instantiating the fat-free templating class
    //$view = new Template();

    // on the object template we render the home page through this route
   // echo $view->render('views/home.html');
});

// fun Fat-Free
$f3->run();