<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/page', 'PageController@index');

Route::get('/greet/{name}', 'PageController@greet');

Route::get('/location/{location}', 'WeatherController@getWeather');

Route::get('/locations', 'LocationController@index');

Route::get('/tags', 'StoryController@tags');

Route::get('/stories', 'StoryController@index');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
