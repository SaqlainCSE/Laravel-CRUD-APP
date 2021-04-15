<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/department/create', 'App\Http\Controllers\DepartmentController@create');
Route::post('/departments', 'App\Http\Controllers\DepartmentController@store');
Route::get('/department/delete/{id}', 'App\Http\Controllers\DepartmentController@destroy');
Route::get('/departments/{id}/edit', 'App\Http\Controllers\DepartmentController@edit');
Route::post('/department/{id}', 'App\Http\Controllers\DepartmentController@update');
Route::get('/departments', 'App\Http\Controllers\DepartmentController@index');

