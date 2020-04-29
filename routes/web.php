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
})->name('');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('route1/{Name?}', 'MyControllers@naming1')->name('route1');

Route::get('route2', 'MyControllers@naming2_index')->name('route2');
Route::post('route2', 'MyControllers@naming2_redirect');

Route::get('route3/{Name?}', 'MyControllers@naming3_index')->name('route3');
Route::post('route3', 'MyControllers@naming3_redirect');

Route::get('route4/{text?}', 'MyControllers@naming4')->name('route4');
