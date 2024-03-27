<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accounts', [AccountController::class, 'index'])->name('account.index');
Route::get('accounts/{id}/view', [AccountController::class, 'show'])->name('account.view');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('contacts/{id}/view', [ContactController::class, 'show'])->name('contacts.view');