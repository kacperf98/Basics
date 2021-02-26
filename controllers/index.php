<?php

$database = require 'core/bootstrap.php';

var_dump($_SERVER['REQUEST_METHOD']);


require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

require 'views/index.view.php';