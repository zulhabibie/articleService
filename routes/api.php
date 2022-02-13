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

/**********************************   Category Route Starts Here   *******************************************/
Route::get('article','ArticleController@index');
Route::get('article/{id}','ArticleController@show');
Route::post('article/update','ArticleController@update');
Route::post('article/remove','ArticleController@remove');
/**********************************   Category Route Ends Here   *******************************************/
