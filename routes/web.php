<?php

use App\Http\Controllers\ThemeController;
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

Route::get('/', [ThemeController::class, 'home'])->name('home');
Route::get('/contacts', [ThemeController::class, 'contacts'])->name('contacts');
Route::post('/set-theme', [ThemeController::class, 'setTheme'])->name('setTheme');


