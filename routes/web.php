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

Route::get('/', 'PizzaController@index');
Route::get('/pizza/order','PizzaController@order');
Route::post('/pizza/order/store','PizzaController@store');
Route::get('/pizza/order/show/{id}','PizzaController@show');
Route::delete('/pizza/order/complete/{id}','PizzaController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


