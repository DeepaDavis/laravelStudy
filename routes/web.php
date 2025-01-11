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



Route::get('/', 'FrontendController@homePage')->name('home');

    Route::get('about-us','FrontendController@aboutUs')->name('about');
    Route::get('contact-us','FrontendController@contactUs')->name('contact');
