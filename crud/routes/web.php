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
    //return view('welcome');
    return view('home');
});

// Route::get('/create', function () {
//     return view('create');
// });

// // Route::get('/view', function () {
// //     return view('view');
// // });

// Route::post('/add', 'UserController@add');
// Route::get('/view', 'UserController@view');
// Route::get('/allqueries', 'UserController@allqueries');
// Route::post('/filter', 'UserController@filterqueries');
Auth::routes();
// Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');
// Route::get('/home', 'HomeController@index')->name('home');
