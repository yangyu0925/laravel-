<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'UsersController@index');

$router->get('{foo?}/{baz?}', function ($name = 'taylor', $age = 25) {
    $path = '/Users/yangyu/sites/code/.env';
//    dd(file($path));
    dd(file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
    dd(count($_ENV));
});