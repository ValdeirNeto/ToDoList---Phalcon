<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/signup', ["controller"=>"signup", "action"=>"register"]);
$router->add('/',["controller"=>"lista","action"=>"lista"]);


$router->handle();
