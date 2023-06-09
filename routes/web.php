<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('task.index')->middleware('auth');
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('task.store');
