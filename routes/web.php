<?php

use App\Http\Controllers\TestController;
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

Route::get('/', [TestController::class , 'login'])->name('login');
Route::get('register', [TestController::class, 'registation'])->name('register');
Route::post('proccess-register', [TestController::class, 'proccessRegistation'])->name('proccessRegistation');
Route::post('authenticate', [TestController::class, 'authenticate'])->name('authenticate');
Route::get('dashboard-demo', [TestController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [TestController::class, 'logout'])->name('logout');