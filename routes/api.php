<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/dogs','APIRestController');

Route::middleware('auth:api')->group( function () {

	Route::resource('products', 'API\ProductController');

});