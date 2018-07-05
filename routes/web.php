<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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
