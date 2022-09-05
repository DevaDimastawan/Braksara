<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/post', function () {
    return view('post', [
        "title" => "Post"
    ]);
        
});
Route::get('/', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
        
});
Route::get('/post2', function () {
    return view('post2', [
        "title" => "Post 2"
    ]);
        
});
Route::get('/post3', function () {
    return view('post3', [
        "title" => "Post 3"
    ]);
        
});
Route::get('/tulisaksara', function () {
    return view('tulisaksara', [
        "title" => "Tulis Aksara"
    ]);
        
});
Route::get('/contactus', function () {
    return view('contactus', [
        "title" => "Contact Us"
    ]);
        
});

