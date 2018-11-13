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
//     return view('login');
// });


Route::get('home','DashboardController@index');

Route::get('/','Auth\LoginController@index');

Route::group(['namespace'=>'Auth'], function() {

	
	Route::post('login','LoginController@login')->name('login');
	Route::get('logout','LoginController@logout');
	// Route::get('home', 'HomeController@index')->name('home');

	// Route::group(['middleware'=>'check-access'], function() {
	// 	Route::get('logout','LoginController@logout');
	// });

	// socialite
	// Route::get('auth/{provider}', 'AuthController@redirectToProvider');
	// Route::get('auth/{provider}/callback', 'AuthController@handleProviderCallback');
});
