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
$router->group(['prefix'=>'users'],function ($router){
    $router->get('view','UserController@view');
    $router->post('create','UserController@create');
});

$router->group(['prefix'=>'roles'],function ($router){
    $router->get('view','RoleController@view');
    $router->post('create','RoleController@create');
    $router->put('update/{id}','RoleController@update');
});
