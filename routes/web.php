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
Route::get('/home', 'EnrolController@home');
Route::get('/subjects', 'EnrolController@index');
Route::get('/subjects/add', 'EnrolController@create');
Route::post('/subjects/store', 'EnrolController@store');
Route::get('/subjects/{subject}', 'EnrolController@show');
Route::get('/subjects/{subject}/edit', 'EnrolController@edit');
Route::post('/subjects/{subject}/update', 'EnrolController@update');
Route::get('/subjects/{subject}/sections', 'SectionsController@create');
Route::get('/subjects/sections/{section}/edit', 'SectionsController@edit');
Route::post('/subjects/sections/{section}/update', 'SectionsController@update');
Route::post('/subjects/{subject}/sections', 'SectionsController@store');