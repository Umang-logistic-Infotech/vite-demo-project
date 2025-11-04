<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('layouts.partials.content');
});

Route::get('/home', function () {
    return view('layouts.partials.content');
})->name('home');

Route::get('/themes', function () {
    return view('layouts.partials.theme');
})->name('themes');

Route::get('/cards', function () {
    return view('layouts.partials.cards');
})->name('cards');

Route::get('/info-box', function () {
    return view('layouts.partials.info-box');
})->name('info-box');

Route::get('/small-box', function () {
    return view('layouts.partials.small-box');
})->name('small-box');

Route::get('/tables', function () {
    return view('layouts.partials.tables');
})->name('tables');

Route::get('/users', [UserController::class, 'getUsers'])->name('users');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
