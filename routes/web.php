<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/uni_dashboard/{user}', [App\Http\Controllers\UniController::class, 'index'])->name('uni_dashboard.show');

Route::get('/school_dashboard/{user}', [App\Http\Controllers\SchoolController::class, 'index'])->name('school_dashboard.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/uni_dashboard/{user}/subjects_info', [App\Http\Controllers\UniController::class, 'subjects'])->name('uni_dashboard.show');

Route::get('/uni_dashboard/{user}/subjects_info/time_info', [App\Http\Controllers\UniController::class, 'time'])->name('uni_dashboard.show');
