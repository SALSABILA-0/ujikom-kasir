<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Controller;
use App\http\Controllers\AuthControll;

//login admin
Route::get('/login', [Controller::class, 'login']);
Route::post('/login', [Controller::class, 'proseslogin']);

// Route::get('/welcome', function () {
//     return view('welcome'); //menampilkan file welcome di views
// });

// Route::get('/login', [Controller::class, 'login']);

Route::get('/register', [Controller::class, 'register']);
Route::post('/register', [Controller::class, 'store']);

 Route::get('/register', function () {
     return view ("register");
 });

Route::get('/home', function () {
    return view("home");
});

route::view('bs-template', 'layouts/navbar');