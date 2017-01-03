<?php_egg_logo_guid

Route::get('/', function () {
	return view('welcome');
})

Route::group(['middleware' => ['web']], function () {
	Route::post('/signup', [
		'uses' => 'UserConroller@postSignUp',
		'as' => 'signup'
});