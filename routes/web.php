<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", [homeController::class, 'index'])->name('home');
Route::view('/about-me', 'aboutme')->name('about-me');
Route::view('/about-us', 'abouus')->name('about-us');
Route::view('/contact', 'contact')->name('contact');
Route::view('/service', 'service_page')->name('service');
Route::view('/service-details', 'service_details')->name('service=details');