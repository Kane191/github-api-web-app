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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','App\Http\Controllers\GithubController@index')->name('index');
//Route::get('/dd','App\Http\Controllers\GithubController@dd')->name('dd');
Route::get('/details/{id}','App\Http\Controllers\GithubController@details')->name('details');
Route::get('/favourite/{id}','App\Http\Controllers\GithubController@favourite')->name('favourite');
