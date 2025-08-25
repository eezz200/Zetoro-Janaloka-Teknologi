<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // halaman Home
});

Route::get('/about', function () {
    return view('partials.about');
});

Route::get('/shop', function () {
    return view('partials.shop');
});

Route::get('/contact', function () {
    return view('partials.contact');
});
