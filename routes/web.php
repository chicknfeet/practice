<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\eventsController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AuthController;

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

Route::get('/',[landingController::class,'index'])->middleware('auth')->name('landing');

Route::get('/home',[homeController::class,'index'])->middleware('auth')->name('home');
Route::get('/profile',[profileController::class,'index'])->middleware('auth')->name('profile');
Route::get('/events',[eventsController::class,'index'])->middleware('auth')->name('events');
Route::get('/news',[newsController::class,'index'])->middleware('auth')->name('news');

Route::get('/contact',[contactController::class,'index'])->middleware('auth')->name('contact');
Route::post('/contact/submit',[contactController::class,'submit'])->name('contact.submit');

Route::get('/login',[AuthController::class,'index'])->name('login');

Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');
Route::get('/register',[AuthController::class,'registration'])->name('registration');
Route::post('/register',[AuthController::class,'register'])->name('register');