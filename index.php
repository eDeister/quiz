<?php
//Initial setup
ini_set('error_reporting',1);
error_reporting(E_ALL);
require_once('vendor/autoload.php');

$f3 = Base::Instance();

$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET /survey', function() {
    $view = new Template();
    echo $view->render('views/survey.html');
});