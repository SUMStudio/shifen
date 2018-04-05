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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carpooling', 'CarpoolingController@index')->name('carpoolingIndex');
Route::get('/carpooling/create', 'CarpoolingController@create')->name('carpoolingCreate');
Route::get('/test','TestController@index');
Route::get('/test/form','TestController@form');
Route::post('/test/post','TestController@post')->name('postTest');
Route::get('/opening/face','OpeningController@face')->name('openingFace');
Route::get('/market/trade','MarketController@trade')->name('marketTrade');