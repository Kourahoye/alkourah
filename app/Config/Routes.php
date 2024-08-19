<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pdf','Home::pdf');
$routes->get('/betterpdf','Home::betterPdf');
