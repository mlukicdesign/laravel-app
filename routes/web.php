<?php

use Illuminate\Support\Facades\Route;

// Api routes returns the view of 'welcome'


Route::get('/', function () {
    return view('welcome');
});


Route::get