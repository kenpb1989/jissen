<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;
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


// Route::namespace('App\Http\Controllers\Sample')->group(function () {
//     Route::get('hello', 'SampleController@index')->name('hello');
//     Route::get('hello/other', 'SampleController@other');
// });

Route::get('hello/{person}', 'App\Http\Controllers\HelloController@index');
