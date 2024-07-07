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

$routes->post("add-student", "Sites::saveStudent", [
  "filter" => "myauth"
]);

$routes->put("update-student", "Sites::updateStudent");

$routes->delete("delete-student", "Sites::deleteStudent");

// $routes->group("product", function ($routes) {
//   $routes->post("add", "Poduct::addProduct");
//   $routes->get("list", "Poduct::listPoducts");
// });

// $routes->group("category", function ($routes) {
//   $routes->get("list", "Category::listCategory");
//   $routes->post("add", "Poduct::addCategory");
// });

// Admin
$routes->group("admin", ["namespace" => "App\Controllers\Admin"], function ($routes) {
  $routes->get("set-role", "AdminController::setRole");
  $routes->get("update-profile", "AdminController::updateProfile");
  $routes->get("add-user", "AdminController::addUser");
});

// Seller
$routes->group("seller", ["namespace" => "App\Controllers\Seller"], function ($routes) {
  $routes->get("add-product", "SellerController::addPordact");
  $routes->get("add-category", "SellerController::addCategory");
});

$routes->get("login", "Sites::login");
$routes->get("logout", "Sites::logout");

$routes->get("access-denied", "Sites::accessDenied");