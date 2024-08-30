<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/coba', function () {
    return view('welcome');
});

// Route::get('/halo', function(){
//     return view('coba.halo');
// });

Route::get('/halo', [HaloController::class, 'index']);

// Route::get('/todo', function(){
//     return view('todo.app');
// });

Route::get('/todo', [TodoController::class, 'index'])->name('todo');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.post');
Route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/delete/{id}', [TodoController::class, 'destroy'])->name('todo.delete');



