<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@create');
$router->post('/novo', 'UsuariosController@createAction');
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');
$router->get('/usuario/{id}/excluir', 'UsuariosController@delete');