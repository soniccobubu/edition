<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\UserContacts;


Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/contacts', [UserContacts::class, 'index'])->name('contacts');
