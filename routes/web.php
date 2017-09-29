<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FormController@getForm');
Route::post('/', 'FormController@postForm');
Route::get('/participants', 'FormController@display')->middleware('auth');
Route::get('/download-csv', 'FormController@getCSV')->middleware('auth');
Route::get('/results', 'FormController@getResults')->middleware('auth');
Route::get('/download-search-csv/{field}/{value}', [
	'uses'=>'FormController@getSearchCSV',
	'as'=>'searchcsv'
	])->middleware('auth');
Auth::routes();

