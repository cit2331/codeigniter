<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//   /restaurants => tên đường dẫn tự đặt
/// Home => Controller
/// ::restaurants => hàm trong controller
//nhánh main -> sửa nhánh main
///asdasdsad
$routes->get('/res', 'Home::restaurants');
//khi đi tới trang admin => gọi filter
//Group => nhóm các đường dẫn lại với nhau
$routes->group("admin",['filter'=>'adminfilter'],function($routes){
    $routes->get('login', 'admin\Login::index');
    $routes->get('dashboard', 'admin\Dashboard::index');
    $routes->post('create', 'admin\Login::create');
    $routes->post('login', 'admin\Login::login');    
    $routes->get('logout', 'admin\Login::logout');
    $routes->get('foods', 'admin\Foods::index');
    $routes->get('foods/add', 'admin\Foods::add');
    $routes->get('foods/edit/(:num)', 'admin\Foods::edit/$1');
    $routes->get('foods/delete/(:num)', 'admin\Foods::delete/$1');
    $routes->post('foods/create', 'admin\Foods::create');
    $routes->post('foods/update', 'admin\Foods::update');
});