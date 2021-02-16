<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', 'App\Http\Controllers\ApiController@getAllUsers');
Route::get('users/{id}', 'App\Http\Controllers\ApiController@getUser');
Route::post('users', 'App\Http\Controllers\ApiController@createUser');
Route::put('users/{id}', 'App\Http\Controllers\ApiController@updateUser');
Route::delete('users/{id}','App\Http\Controllers\ApiController@deleteUser');

Route::get('items', 'App\Http\Controllers\ApiController@getAllItems');
Route::get('items/{id}', 'App\Http\Controllers\ApiController@getItem');
Route::post('items', 'App\Http\Controllers\ApiController@createItems');
Route::put('items/{id}', 'App\Http\Controllers\ApiController@updateItem');
Route::delete('items/{id}','App\Http\Controllers\ApiController@deleteItem');
