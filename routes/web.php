<?php

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
    return view('welcome');
});

Route::get('register', 'PrijavaUcesnikaController@register')->name('register');

Route::get('welcome-registration');

Route::get('ukupno-ucesnika', 'PrijavaUcesnikaController@countParticipants')->name('ukupno-ucesnika');

Route::any('submit-registration', 'PrijavaUcesnikaController@submitRegistration')->name('submit-registration');
