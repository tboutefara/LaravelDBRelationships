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

route::get('/', function(){
    return 'No data';
});
Route::get('/drivers', 'App\Http\Controllers\MyController@drivers');
Route::get('/driver/{id}', 'App\Http\Controllers\MyController@driver');
Route::get('/cars', 'App\Http\Controllers\MyController@cars');
Route::get('/car/{id}', 'App\Http\Controllers\MyController@car');