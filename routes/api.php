<?php

use Illuminate\Http\Request;

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

Route::get('/{submission}', 'SubmissionsController@show');
Route::post('/', 'SubmissionsController@store');

// Not implemented
Route::patch('/{submission}', 'SubmissionsController@update');
Route::delete('/{submission}', 'SubmissionsController@destroy');

