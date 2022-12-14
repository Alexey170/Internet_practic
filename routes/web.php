<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class);
    Route::get('/single', BlogSingle::class);

});


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
       Route::get('/', IndexController::class);
       Route::get('/single', BlogSingle::class);
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/', IndexController::class);
        Route::get('/single', BlogSingle::class);
    });
});
