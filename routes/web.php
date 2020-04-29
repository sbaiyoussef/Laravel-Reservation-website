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

 Route::get('/', function () {
    return view('home');
 });
Route::get('/home','HomeController@home')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/blog','HomeController@blog')->name('blog');
Route::get('/restaurant','HomeController@resto')->name('restaurant');
Route::get('/rooms','HomeController@rooms')->name('rooms');
Route::get('/room-single','HomeController@roomSingle')->name('room-single');
Route::get('/blog-single','HomeController@blogSingle')->name('blog-single');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/reserve','HomeController@reserve')->name('reserve');
Route::post('/reservation','ReservController@reservationcreate')->name('reservation.create');