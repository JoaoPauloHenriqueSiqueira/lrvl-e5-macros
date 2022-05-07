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
    dd(\Illuminate\Support\Str::partNumber("sdjdisdai"));
    //dd(\Illuminate\Support\Str::prefix("sdjdisdai"));

    return \Illuminate\Routing\ResponseFactory::errorJson('asdsaddas');
});
