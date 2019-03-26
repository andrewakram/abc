<?php

/*
 * ==============================+===============================
 * Developed By : ANDREW AKRAM ALBERT ZAKI
 * Contact Me At:
 * Email : andrewalbert93501@gmail.com
 * Phone : +2 011 28 5700 38
 * LinkedIn : https://www.linkedin.com/in/andrew-akram-2167a0154/
 * ==============================+===============================
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
