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

//Routes

Route::middleware(['auth'])->group(function (){
    //Roles
    Route::post('roles/store', 'RoleController@store')->nmae('roles.store')->middleware('permission:roles.create');
    Route::get('roles', 'RoleController@index')->nmae('roles.index')->middleware('permission:roles.index');
    Route::get('roles/create', 'RoleController@create')->nmae('roles.create')->middleware('permission:roles.create');
    Route::put('roles/{role}', 'RoleController@update')->nmae('roles.update')->middleware('permission:roles.edit');
    Route::get('roles/{role}', 'RoleController@show')->nmae('roles.show')->middleware('permission:roles.show');
    Route::delete('roles/{role}', 'RoleController@destroy')->nmae('roles.destroy')->middleware('permission:roles.destroy');
    Route::get('roles/{role}', 'RoleController@edit')->nmae('roles.edit')->middleware('permission:roles.edit');

    //Product
    Route::post('products/store', 'ProductController@store')->nmae('products.store')->middleware('permission:products.create');
    Route::get('products', 'ProductController@index')->nmae('products.index')->middleware('permission:products.index');
    Route::get('products/create', 'ProductController@create')->nmae('products.create')->middleware('permission:products.create');
    Route::put('products/{role}', 'ProductController@update')->nmae('products.update')->middleware('permission:products.edit');
    Route::get('products/{role}', 'ProductController@show')->nmae('products.show')->middleware('permission:products.show');
    Route::delete('products/{role}', 'ProductController@destroy')->nmae('products.destroy')->middleware('permission:products.destroy');
    Route::get('products/{role}', 'ProductController@edit')->nmae('products.edit')->middleware('permission:products.edit');

    //User
    Route::get('users', 'UserController@index')->nmae('users.index')->middleware('permission:users.index');
    Route::put('users/{role}', 'UserController@update')->nmae('users.update')->middleware('permission:users.edit');
    Route::get('users/{role}', 'UserController@show')->nmae('users.show')->middleware('permission:users.show');
    Route::delete('users/{role}', 'UserController@destroy')->nmae('users.destroy')->middleware('permission:users.destroy');
    Route::get('users/{role}', 'UserController@edit')->nmae('users.edit')->middleware('permission:users.edit');

});
