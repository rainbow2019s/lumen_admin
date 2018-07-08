<?php

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

$router->group(['prefix'=>'admin'], function () use ($router) {
    $router->get('/test/index','TestController@index');
    // $router->get('index','HomeController@index');
    // $router->get('ebook','HomeController@ebook');
    // $router->get('baidu','HomeController@baidu');
});
