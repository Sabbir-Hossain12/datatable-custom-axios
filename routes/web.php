<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','pages.customer')->name('customer');

Route::resource('/users', UserController::class);