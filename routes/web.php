<?php

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
use App\Http\Controllers\Controller; // Perhatikan perubahan ini

Route::get('/', function () {
    return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});