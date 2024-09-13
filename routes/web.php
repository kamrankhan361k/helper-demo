<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greet/{name}', function ($name) {
    // Test the greet_user helper function
    return greet_user($name);
});

Route::get('/format-date/{date}', function ($date) {
    // Test the format_date helper function
    return format_date($date);
});