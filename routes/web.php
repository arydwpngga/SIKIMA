<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/events', [EventController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);