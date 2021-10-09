<?php

use App\Http\Controllers\AutheticationController;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', HomePage::class)->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [AutheticationController::class, 'login'])->name('login.form');
Route::post('/login', [AutheticationController::class, 'logar'])->name('login');
