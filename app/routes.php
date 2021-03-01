<?php

// Defines routes to be added to the router instance (by request type).

// GET Routes:
$router->get('Basics', 'PagesController@home');
$router->get('Basics/about', 'PagesController@about');
$router->get('Basics/contact', 'PagesController@contact');
$router->get('Basics/users', 'UsersController@index');

// POST Routes:
$router->post('Basics/users', 'UsersController@store');