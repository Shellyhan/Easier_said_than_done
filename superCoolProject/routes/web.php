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

// Route::get('/', function () {
//   $fruits = ['apple','pear','grape'];  
//   // $fruits = []; 
//   return view('welcome', compact('fruits'));
// });



Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

