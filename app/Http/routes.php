<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index')->name('social.home');

// Authentication Routes
Route::get('/signup', 'AuthController@getSignup')->name('auth.signup');
Route::post('signup', 'AuthController@postSignup');

// Sign in Routes
Route::get('/signin', 'AuthController@getSignin')->name('auth.signin');
Route::post('signin', 'AuthController@postSignin');
