<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => 'user'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('profile', 'AuthController@me');
});

// Route Admin
Route::group([
    'prefix' => 'admin'
], function () {
    Route::post('login', 'AdminController@login');
    Route::post('signup', 'AdminController@signup');
    Route::post('logout', 'AdminController@logout');
    Route::post('refresh', 'AdminController@refresh');
    Route::post('profile', 'AdminController@me');
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::get('index', 'AuthController@index');
});



