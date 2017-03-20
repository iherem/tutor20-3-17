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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'StudentController@index');
Route::get('/home/{option}/{limit}', 'StudentController@limit');
Route::get('/home/{option}', 'StudentController@limit');
Route::get('/add','StudentController@addStudent');
Route::post('/add','StudentController@addStudent');
Route::get('/delete/{student_id}', 'StudentController@deleteStudent');


//EDIT
Route::get('/edit/{student_id}','StudentController@editStudent');
Route::post('/edit','StudentController@editStudent');

Route::get('/test', 'StudentController@test');