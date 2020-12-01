<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// route for showing information of all available products
$router->get('/product', 'ProductController@index');

// route for creating a new product
$router->post('/product', 'ProductController@create');

//route for displaying informations for a single products
$router->get('/product/{id}', 'ProductController@show');

// route for making changes to the information in a single product effective and saved.
$router->put('/product/{id}', 'ProductController@update');

// route responsible for deletion of a single product
$router->delete('/product/{id}', 'ProductController@destroy');




