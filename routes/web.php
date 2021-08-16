<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Cms\DahsboardController@index')->name('dashboard.index');
