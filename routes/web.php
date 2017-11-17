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



Route::get('/', 'QuestionsController@index');
Route::resource('questions', 'QuestionsController');
Route::post('questions/comment/{question}','QuestionsController@comment');
Route::post('questions/answer/{question}','QuestionsController@answer');
Route::get('questions/user/{user}','QuestionsController@user');
Route::get('questions/tagged/{id}/{tag}','QuestionsController@tagged');
Route::get('questions/answer/{question}/{answer}','QuestionsController@test');
Route::post('answers/comment/{answer}','AnswersController@comment');
Route::get('answers/','AnswersController@index');
Auth::routes();

