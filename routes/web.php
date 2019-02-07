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
Route::get('/create','EmployeesController@create');
Route::get('/master',function(){
  return view('layouts.master');
});
Route::post('edit/{id}','EmployeesController@update');
Route::post('/store','EmployeesController@store');
Route::get('/index','EmployeesController@index');
Route::post('/delete/{id}','EmployeesController@delete');
Route::get('edit/{id}','EmployeesController@edit');
