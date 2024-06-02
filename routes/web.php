<?php

use App\Http\Controllers\ContactController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Api routes returns the view of 'welcome'


Route::get('/', function () {
    return view('welcome');
});

// Route to handle contact form
Route::get('/contact', [ContactController::class, 'showForm']);

// Route to handle the form submission
Route::post('/contact', [ContactController::class, 'storeMessage']);

Route::get('/messages', [ContactController::class, 'showMessages']);