<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;

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
    return view('index');
});

Route::get('lang/{lang}', [LanguajeController::class,'changeLanguaje'])->where([
    'lang' => 'en|es'
])->name('setLanguaje');

Route::get('/contacto',[ContactController::class,'index'])->name('contact');

Route::get('/contacto',[ContactController::class,'index'])->name('contact');

Route::get('/galeria',[GalleryController::class,'index'])->name('galeria');

Route::get('/blog',[BlogController::class,'index'])->name('blog');
