<?php

// Route::get('/', function () {
//   $fruits = ['apple','pear','grape'];  
//   // $fruits = []; 
//   return view('welcome', compact('fruits'));
// });



Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');
