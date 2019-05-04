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

/* -- Start of register route -- */
Route::get('/register', 'UserController@signup');
Route::post('/register', 'UserController@postSignup')->name('signup');

/* -- Start of login route -- */
Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@postLogin')->name('signin');

Route::get('/logout', 'UserController@logout')->name('logout');
Route::get('/student', 'UserController@getStudent')->name('student');

// User profile route
//Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/profile', [

	'uses' => 'UserController@profile',
	'as' => 'profile',
	'middleware' => 'auth'

	]);

// route to return form to edit user profile - personal details
Route::get('/biodata', 'UserController@editbiodata')->name('editbiodata');
Route::post('/updatebiodata/{email}/edit', 'UserController@updatebiodata')->name('updatebiodata');

// route to return form to edit user profile - bank details
Route::get('bank', 'UserController@editbankdetails')->name('editbankdetails');
Route::post('/updatebankdetails/{email}/edit', 'UserController@updatebankdetails')->name('updatebankdetails');

// route to return form to edit user profile - nextofkin details
Route::get('nextofkin', 'UserController@editnextofkin')->name('editnextofkin');
Route::post('/updatenextofkin/{email}/edit', 'UserController@updatenextofkin')->name('updatenextofkin');

// route to post and update image

Route::post('/updateprofileimage/{email}/edit', 'UserController@updateprofileimage')->name('updateprofileimage');



//Route::get('/user', 'UserController@getUserDashboard')->name('user-dashboard');

Route::get('/dashboard', [

	'uses' => 'UserController@dashboard',
	'as' => 'dashboard',
	'middleware' => 'auth'

	]);







