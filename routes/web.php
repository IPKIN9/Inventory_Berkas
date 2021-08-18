<?php

use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {
    Route::get('/', 'Cms\DahsboardController@index')->name('dashboard.index');
});

Route::prefix('auth')->group(function () {
    Route::get('/index', 'Auth\RegisterController@index')->name('register.index');
    Route::post('/insert', 'Auth\RegisterController@insert')->name('register.insert');
    Route::get('/login', 'Auth\AuthController@index')->name('login');
    Route::post('/dashauth', 'Auth\AuthController@login')->name('authlogin');
});

Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
