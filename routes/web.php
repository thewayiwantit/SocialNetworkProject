<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::post('/signup',[
     'uses' => 'UserController@postSignUp',
	 'as' => 'signup'
]);
Route::post('/signin',[
     'uses' => 'UserController@postSignIn',
	 'as' => 'signin'
]);
Route::post('/createpost',[
     'uses' => 'PostController@postCreatePost',
	 'as' => 'post.create'
]);
Route::get('/logout', [
     'uses' => 'UserController@getLogout',
	 'as' => 'logout'
]);
Route::post('/edit', [
    'uses' => 'PostController@postEditPost',
    'as' => 'edit'
]);
Route::get('/account', [
    'uses' => 'UserController@getAccount',
    'as' => 'account'
]);
Route::post('/upateaccount', [
    'uses' => 'UserController@postSaveAccount',
    'as' => 'account.save'
]);
Route::get('/userimage/{filename}', [
    'uses' => 'UserController@getUserImage',
    'as' => 'account.image'
]);
Route::post('/like', [
    'uses' => 'PostController@postLikePost',
    'as' => 'like'
]);
Route::group(['middleware' => 'auth'], function () {
Route::get('/dashboard', [
     'uses' => 'PostController@getDashboard',
	 'as' => 'dashboard'
]);
Route::get('/delete-post/{post_id}', [
     'uses' => 'PostController@getDeletePost',
	 'as' => 'post.delete'
]);
});


