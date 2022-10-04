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

$router->get('/test', function () use ($router) {
    echo "hi";
    return $router->app->version();

});




$router->get('/api/v1/products', "ProductsController@showAll");
$router->get('/api/v1/products/{id}', "ProductsController@show");
$router->post('/api/v1/products', "ProductsController@save");
$router->put('/api/v1/products/{id}', "ProductsController@update");
$router->delete('/api/v1/products/{id}', "ProductsController@delete");

