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
Route::group(['middleware' => 'web'], function(){

    Route::get('/', 'crudController@list');
    Route::view('create', 'create');
    Route::post('created', 'crudController@create');
    Route::get('edit/{id}', 'crudController@getData');
    Route::view('login', 'login');
    Route::view('register', 'register');
    Route::post('edit/updated/{id}', 'crudController@updated');
    Route::get('delete/{id}', 'crudController@delete');
    Route::post('register', 'credentialController@register');
    Route::post('login', 'credentialController@login');
    Route::get('logout', 'credentialController@logout');

});


