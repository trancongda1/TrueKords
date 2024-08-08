<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// get home
Route::get('/songs', function () {
    return view('songs');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/contribute', function () {
    return view('contribute');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/playlists', function () {
    return view('playlists');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/music', function () {
    return view('music');
});
