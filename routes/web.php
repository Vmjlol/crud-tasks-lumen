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

$router->get('/tasks', 'TaksController@index');
$router->get('/tasks/{id}', 'TaksController@show');
$router->post('/tasks', 'TaksController@store');
$router->put('/tasks/{id}', 'TaksController@update');
$router->delete('/tasks/{id}', 'TaksController@destroy');

$router->get('/subtasks', 'SubtaskController@index');
$router->get('/subtasks/{id}', 'SubtaskController@show');
$router->post('/subtasks', 'SubtaskController@store');
$router->put('/subtasks/{id}', 'SubtaskController@update');
$router->delete('/subtasks/{id}', 'SubtaskController@destroy');

