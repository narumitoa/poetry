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

$router->get('/api/home','APIController@home');

$router->get('/api/book','APIController@book');

$router->get('/api/chapter','APIController@chapter');

$router->get('/api/search','APIController@search');

$router->get('/api/tag','APIController@tag');
