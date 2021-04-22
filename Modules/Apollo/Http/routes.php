<?php

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'apollo', 'namespace' => 'Modules\Apollo\Http\Controllers'], function()
{
     Route::get('/', 'ApolloController@index')->name('apollo.index');
});
