<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/user', 'users');

// Api Calling 
Route::get('/user', [UserController::class, 'getUser']);
Route::get('/students', [StudentController::class, 'getStudent']);