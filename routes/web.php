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
Route::get('/contact', function() {
    return view('contact');
});

// Route to handle the form submission
Route::post('/contact', function(Request $request) {
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:8|max:1000',
    ]);

    Message::create([
        'sender_name' => $validated['name'],
        'sender_email' => $validated['email'],
        'message' => $validated['message'],
    ]);

    // if validation passes, redirect to the root URL
    return redirect('/messages');
});


Route::get('/messages', function(){
    return view('messages', ['messages' => Message::all()]);
});