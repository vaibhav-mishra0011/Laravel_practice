<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::resource('/tasks', TaskController::class);
Route::get('/users', [RegisterController::class,'index'])->name('index');
Route::post('/users', [RegisterController::class,  'register'])->name('users.register');
Route::post('/users', [LoginController::class,  'login'])->name('users.login');

// get - index
// post - update
// put - store
// delete - destroy