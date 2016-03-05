<?php



Route::get('/', 'ProfileController@index');
Route::get('profile/browse/{id}', 'ProfileController@browUser');


Route::resource('profile','ProfileController',
	array('except' => array('create', 'store')));

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
