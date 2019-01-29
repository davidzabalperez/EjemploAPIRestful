<?php

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/','ConsumeApiController@getStarsWars');
Route::resource('imgur','ImgurController');