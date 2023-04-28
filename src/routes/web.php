<?php

use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/{driver}/redirect' , [SocialAuthController::class , 'redirectToProvider'])->name('social.redirect');
Route::get('auth/{driver}/callback' , [SocialAuthController::class , 'callbackProvider'])->name('social.callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
