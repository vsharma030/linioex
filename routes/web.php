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

Route::get('/', function () {
    return view('welcome');
});



/*Route::get('/create', function () {
    return view('create');
});*/

Route::get('/list', 'Controller@temp');
Route::get('/create', 'Controller@createView');
Route::post('/c','Controller@cont');
Route::post('/createnewissue','Controller@create');

