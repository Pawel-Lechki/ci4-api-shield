<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get("add-student", "Sites::insertStudent");

$routes->get("update-student", "Sites::updateStudent");

$routes->get("delete-student", "Sites::deleteStudent");

$routes->get("students", "Sites::selectStudents");