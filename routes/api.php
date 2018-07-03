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


//User
Route::post('/register','User_94120Controller@register');
Route::post('/login','User_94120Controller@login');
Route::get('/showusers', 'User_94120Controller@showUsers');

//Session 
Route::post('/save_session','SessionController@save');
Route::get('/show_session','SessionController@session');

//Instructors
Route::post('/saveInstructor','instructorController@saveInstructor');
Route::get('/showinstructors','instructorController@showinstructors');

//Gym
Route::post('/saveGym','gym_locationController@saveGym');
Route::get('/showGym','gym_locationController@showGym');


//
