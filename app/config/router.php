<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/signup', ["controller"=>"signup", "action"=>"register"]);
// $router->add('/',["controller"=>"home","action"=>"index"]);

$router->handle();
