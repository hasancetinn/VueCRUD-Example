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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('save_student', 'StudentController@create');
Route::get('all_student','StudentController@show');
Route::get('edit_student/{id}', 'StudentController@edit');
Route::put('update_student', 'StudentController@update');
Route::delete('delete_student/{id}', 'StudentController@delete');