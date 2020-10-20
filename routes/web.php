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

Route::get('/', 'App\Http\Controllers\PublicController@home');

Route::get('/about', 'App\Http\Controllers\PublicController@about');

Route::group(['prefix' => 'contact'], function () {
    Route::get('', 'App\Http\Controllers\PublicController@contact');

    Route::post('submit', 'App\Http\Controllers\MessagesController@submit');
});

Route::get('messages', 'App\Http\Controllers\MessagesController@getMessages');


