<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;

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

Route::get('/',[landingController::class,'index'])->name('landing');

Route::get('/home',[homeController::class,'index'])->name('home');
Route::get('/profile',[profileController::class,'index'])->name('profile');
Route::get('/events',[eventsController::class,'index'])->name('events');
Route::get('/news',[newsController::class,'index'])->name('news');
Route::get('/contact',[contactController::class,'index'])->name('contact');
