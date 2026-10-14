<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/profile', [PortfolioController::class, 'profile'])->name('profile');
Route::get('/details', [PortfolioController::class, 'details'])->name('details');
Route::get('/contacts', [PortfolioController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [PortfolioController::class, 'submitContact'])->name('contacts.submit');
