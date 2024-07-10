<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
Route::get('/add-task', [App\Http\Controllers\TaskController::class, 'create'])->name('add-task');
Route::post('/save-task', [App\Http\Controllers\TaskController::class, 'store'])->name('save-task');
Route::delete('/delete-task/{id}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('delete-task');
