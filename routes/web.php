<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('todo', TodosController::class);
Route::patch('/todo/{id}/toggleStatus', [TodosController::class, 'toggleStatus'])->name('todo.toggleStatus');
