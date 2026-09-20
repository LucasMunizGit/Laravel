<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Site
Route::get('/', [SiteController::class, "index"]);

// LOGIN
Route::get('/login', [LoginController::class, "index"]);