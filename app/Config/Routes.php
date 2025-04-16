<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('pages/about-us', 'Pages::about_us');
$routes->get('pages/contact', 'Pages::contact');
$routes->get('pages/index', 'Pages::index');
$routes->get('pages/product', 'Product::index'); 
$routes->get('products', 'Product::index');
