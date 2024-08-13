<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'AuthController::login');
$routes->get('/login', 'AuthController::login');
$routes->post('/authenticate', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/dashboard', 'DashboardController::index');

// $routes->get('/', 'CustomerController::index');
$routes->get('/customers', 'CustomerController::index');
$routes->get('/customers/create', 'CustomerController::create');
$routes->post('/customers/store', 'CustomerController::store');
$routes->get('/customers/edit/(:num)', 'CustomerController::edit/$1');
$routes->post('/customers/update/(:num)', 'CustomerController::update/$1');
$routes->post('/customers/delete/(:num)', 'CustomerController::delete/$1');
