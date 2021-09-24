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
    return view('index');
});


Route::get('/contact', function () {
    return view('form_contact');
});

Route::post('/contact/done','App\Http\Controllers\SiteController@submit')->name("form");
Route::post('/contact/done/done','App\Http\Controllers\SiteController@submit')->name("form");
