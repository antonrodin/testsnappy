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

// Snappy PDF
Route::get('/snappy/html', 'SnappyController@index');
Route::get('/snappy/loadView', 'SnappyController@loadView');
Route::get('/snappy/loadFile', 'SnappyController@loadFile');
Route::get('/snappy/invoice', 'SnappyController@invoice');

// Laravel Excel 3.1
Route::get('/tasks ', 'TaskController@index');
Route::get('/tasks/export/', 'TaskController@export');
