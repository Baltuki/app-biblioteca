<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes', 'Home::quienes');
$routes->get('acerca', 'Home::acerca');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

$routes->get('/registro', 'Usuario_controller::create');
$routes->post('/enviar-form','Usuario_controller::formValidation');


$routes->get('/login', 'Login_controller');
$routes->post('/enviarlogin', 'Login_controller::auth'); 
$routes->get('/panel', 'Panel_controller::index',['filter'=>'auth']);
$routes->get('/logout','Login_controller::logout');