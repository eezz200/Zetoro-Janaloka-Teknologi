<?php
use Illuminate\Support\Facades\Route;

Route::get('index', function () {
    return view('index'); 
});

Route::get('/about', function () {
    return view('partials.about');
});

Route::get('/contact', function () {
    return view('partials.contact');
});
