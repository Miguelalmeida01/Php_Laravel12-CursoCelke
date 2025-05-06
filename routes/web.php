<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// usuarios

Route::get('/index-user', [UserController::class, 'index'])->name('user.index');
Route::get('/index-user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');
   

