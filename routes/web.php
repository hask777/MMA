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

Route::get('/', 'FightersController@index');
Route::get('/fighter/{id}', 'FightersController@show')->name('fighter');

Route::get('/leagues', 'LeaguesController@index');
Route::get('/shedules', 'ShedulesController@index');
Route::get('/shedule/{id}', 'ShedulesController@show')->name('shedule');
