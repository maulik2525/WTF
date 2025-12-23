<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopscoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,'login'])->name('login.page');
Route::get('/register',[RegisterController::class,'register'])->name('register.page');
Route::post('/login', [LoginController::class, 'store'])->name('login.data');
Route::post('/register', [RegisterController::class, 'store'])->name('register.data');
Route::get('/index',[ShopscoController::class,'home'])->name('home');
Route::get('/blog',[ShopscoController::class,'blog'])->name('blog');
Route::get('/about',[ShopscoController::class,'about'])->name('about');
Route::get('/contact',[ShopscoController::class,'contact'])->name('contact');
Route::post('/contact', [ShopscoController::class, 'contactdata']) ->name('contact.data');
