<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
});



Route::get('/register', function () {
    return view('registration');  // Adjust this to your actual view name
});

Route::post('/register', [UserController::class, 'store']);
