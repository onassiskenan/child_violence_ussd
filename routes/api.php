<?php

use  App\violence; 

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::match(['get', 'post'], '/', 'RoughController@index')->name('rough')


Route::post('send_violence_request', 'RoughController@index');

Route::get('/violences', function() {
    return violence::all(); 
});
