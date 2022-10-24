<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', function () {
    dd(request('search'));
    return view('home');
});

// Route::get('/record', function () {
//     return view('record');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

//Register
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

//Login and logout
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('session', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

//User profile
Route::get('profile', [UserController::class, 'index'])->middleware('auth')->name('profile');
Route::get('profile/edit/{id}', [UserController::class, 'show'])->middleware('auth');
Route::post('profile/edit/{id}', [UserController::class, 'update'])->middleware('auth');

// Route::post('profile', [UserController::class, 'store'])->middleware('');

Route::get('staffrecord', [AdminController::class, 'index'])->middleware('auth');
