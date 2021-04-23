<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomepageController@index')->name('homepage');

Auth::routes();

//rotte con autenticazione
Route::resource('users', 'User\UserController')->middleware('auth');

Route::prefix('user')
->namespace('User')
->middleware('auth')
->name('user.')
->group(function () {
        // Route::get('/', 'HomeController@index')
        // ->name('home');

        Route::resource('weights', 'WeightController');
});
