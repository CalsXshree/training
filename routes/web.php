<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/classes', function () {
    return view('classes');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/services',function () {
    return view('services');
});

Route::get('/joinus',function () {
    return view('joinus');
});

Route::get('/freepass',function () {
    return view('freepass');
});



Route::view('/temp', 'temp');

