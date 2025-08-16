<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('index');   // أو اسم ملف الـBlade الذي يمثل الداش بورد
});