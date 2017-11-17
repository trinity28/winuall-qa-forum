<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

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