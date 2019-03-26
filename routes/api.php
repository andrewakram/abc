<?php

use Illuminate\Http\Request;
/*
 * ==============================+===============================
 * Developed By : ANDREW AKRAM ALBERT ZAKI
 * Contact Me At:
 * Email : andrewalbert93501@gmail.com
 * Phone : +2 011 28 5700 38
 * LinkedIn : https://www.linkedin.com/in/andrew-akram-2167a0154/
 * ==============================+===============================
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');

    Route::get('/urls', 'API\UrlController@all_urls');
    Route::post('/url/create', 'API\UrlController@insert_url');
    Route::get('/url/get/{url_id}', 'API\UrlController@get_url');
    Route::delete('/url/delete/{url_id}', 'API\UrlController@delete_url');
    Route::patch('/url/update/{url_id}', 'API\UrlController@update_url');

});
