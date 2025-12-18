<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopscoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[ShopscoController::class,'home'])->name('home');
Route::get('/blog',[ShopscoController::class,'blog'])->name('blog');
Route::get('/about',[ShopscoController::class,'about'])->name('about');
Route::get('/contact',[ShopscoController::class,'contact'])->name('contact');

Route::post('contact/data',[ShopscoController::class,'contactdata'])->name('contact.data');
