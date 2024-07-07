<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// $routes->get("add-student", "Sites::insertStudent");

// $routes->get("update-student", "Sites::updateStudent");

// $routes->get("delete-student", "Sites::deleteStudent");

// $routes->get("students", "Sites::selectStudents");

// API ROUTES
$routes->get("list-students", "Sites::listStudent");

$routes->post("add-student", "Sites::saveStudent");

$routes->put("update-student", "Sites::updateStudent");

$routes->delete("delete-student", "Sites::deleteStudent");