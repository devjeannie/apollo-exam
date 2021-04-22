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

Route::prefix('apollo')->group(function() {
    
    Route::get('/', 'ApolloController@index')->name('apollo.index');

    Route::get('/generate', 'ApolloController@create')->name('apollo.generate');


});
