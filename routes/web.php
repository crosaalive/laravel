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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/addRole', 'HomeController@addRole')->name('home-addRole');
Route::get('/home/distributionRole', 'HomeController@distributionRole')->name('home-distributionRole');
Route::get('/home/addPermission', 'HomeController@addPermission')->name('home-addPermission');
Route::get('/home/hasRole', 'HomeController@hasRole')->name('home-hasRole');

Route::get('/user/usermain', 'User\UserController@userList')->name('user-userList');
Route::get('/user/useradd', 'User\UserController@userAdd')->name('user-userAdd');
Route::get('/user/useredit', 'User\UserController@userEditShow')->name('user-userEdit');

