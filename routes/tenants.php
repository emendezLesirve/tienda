<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['web'])
    ->namespace('App\Http\Controllers')
    ->as('tenant.')
    ->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/products', function () {
           dd(\App\Models\Tenant\Product::all());
        });
    });
