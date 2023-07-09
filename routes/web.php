<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/stock', 'StockController@index');
Route::get('/stock/create', 'StockController@create'); 
Route::post('/stock', 'StockController@store');
Route::get('stock/{id}/edit', 'StockController@edit'); 
Route::patch('stock/{id}', 'StockController@update');
Route::delete('stock/{id}', 'StockController@destroy');
Route::get('/stock/search','StockController@search')->name('search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');