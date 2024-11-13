<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
