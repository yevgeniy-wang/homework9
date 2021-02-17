<?php

use Illuminate\Events\Dispatcher;

$request = \Illuminate\Http\Request::createFromGlobals();
function request()
{
    global $request;

    return $request;
}

$dispatcher = new Dispatcher();
$container = new \Illuminate\Container\Container();
$router = new \Illuminate\Routing\Router($dispatcher, $container);
function router()
{
    global $router;

    return $router;
}

$router->get('/', '\Hillel\Homework9\Controller\IndexController@index');

$router->get('/categories', '\Hillel\Homework9\Controller\CategoryController@list');

$router->get('/categories/create', '\Hillel\Homework9\Controller\CategoryController@create');
$router->post('/categories/create', '\Hillel\Homework9\Controller\CategoryController@store');

$router->get('/categories/{id}/edit', '\Hillel\Homework9\Controller\CategoryController@edit');
$router->post('/categories/{id}/edit', '\Hillel\Homework9\Controller\CategoryController@update');

$router->get('/categories/{id}/edit', '\Hillel\Homework9\Controller\CategoryController@edit');
$router->post('/categories/{id}/edit', '\Hillel\Homework9\Controller\CategoryController@update');

$router->get('/categories/{id}/delete', '\Hillel\Homework9\Controller\CategoryController@destroy');


$router->get('/posts', '\Hillel\Homework9\Controller\PostController@list');

$router->get('/posts/create', '\Hillel\Homework9\Controller\PostController@create');
$router->post('/posts/create', '\Hillel\Homework9\Controller\PostController@store');

$router->get('/posts/{id}/edit', '\Hillel\Homework9\Controller\PostController@edit');
$router->post('/posts/{id}/edit', '\Hillel\Homework9\Controller\PostController@update');

$router->get('/posts/{id}/edit', '\Hillel\Homework9\Controller\PostController@edit');
$router->post('/posts/{id}/edit', '\Hillel\Homework9\Controller\PostController@update');

$router->get('/posts/{id}/delete', '\Hillel\Homework9\Controller\PostController@destroy');


