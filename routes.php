<?php

Route::resource('/', 'CommentsController');
Route::get('votes/{id}/{option}', 'CommentsController@votes');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
