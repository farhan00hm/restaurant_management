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
    return redirect()->route('login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['admin','auth'],'namespace'=>'Admin'],function(){
    Route::get('dashboard','AdminDashboardController@index')->name('admin.dashboard');
    Route::post('adduser','AdminDashboardController@store');
});

Route::group(['prefix'=>'user', 'middleware'=>['user','auth'],'namespace'=>'User'],function(){
    Route::get('dashboard','UserDashboardController@index')->name('user.dashboard');
});
