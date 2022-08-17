<?php

// Define USers routes

$routes->get('/', '\Modules\Users\Controllers\Users::news');
$routes->get('users', '\Modules\Users\Controllers\Users::index');
$routes->post('send', '\Modules\Users\Controllers\Users::send');
