<?php

// Defines routes to be added to the router instance (by request type).

// GET Routes:
$router->get('Basics', 'controllers/index.php');
$router->get('Basics/about', 'controllers/about.php');
$router->get('Basics/about/culture', 'controllers/about-culture.php');
$router->get('Basics/contact', 'controllers/contact.php');

// POST Routes:
$router->post('Basics/names', 'controllers/add-name.php');