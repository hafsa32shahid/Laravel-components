<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\TestUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'register']);
Route::post('/user/register', [UserController::class, 'registered'])->name('user.registered');

// login page

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/user/login', [UserController::class, 'login_user'])->name('user.login');

// dashboard page
// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')
// ->middleware([ValidUser::class,TestUser::class]);//normal middleware

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')
->middleware('ok-user');

// dashboard page
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

