<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/atlet', function () {
    return view('atlet');
});
Route::get('/design', function () {
    return view('design');
});
