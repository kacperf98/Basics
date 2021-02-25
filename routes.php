<?php

$router->define([
    'Basics' => 'controllers/index.php',
    'Basics/about' => 'controllers/about.php',
    'Basics/about/culture' => 'controllers/about-culture.php',
    'Basics/contact' => 'controllers/contact.php',
    'Basics/names' => 'controllers/add-name.php'
]);
