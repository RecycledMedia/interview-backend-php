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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('users', 'ApiController@getAllUsers');
Route::get('users/{id}', 'ApiController@getUser');
Route::post('users', 'ApiController@createUser');
Route::put('users/{id}', 'ApiController@updateUser');
Route::delete('users/{id}','ApiController@deleteUser');

Route::get('items', 'ApiController@getAllItems');
Route::get('items/{id}', 'ApiController@getItem');
Route::post('items', 'ApiController@createItems');
Route::put('items/{id}', 'ApiController@updateItem');
Route::delete('items/{id}','ApiController@deleteItem');
