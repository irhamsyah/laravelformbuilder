<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => 'web'], function () {
//     Route::get('/', 'HomeController@welcome');
//     Route::auth();
//     Route::get('/home', 'HomeController@index');
//     Route::resource('products', 'ProductsController');
//     Route::get('catalogs', 'CatalogsController@index');
//     Route::resource('categories', 'CategoriesController');
// });

Route::get('/','HomeController@welcome');

Route::post('simpancode',[

	'as'=>'simpancode',
	'uses'=>'FormbuilderController@simpancode'
]);

Route::get('lihattemplate',[

	'as'=>'lihattemplate',
	'uses'=>'FormbuilderController@lihattemplate'
]);

Route::delete('/hapuslisttemplate/{id?}',[

	'as'=>'hapuslisttemplate',
	'uses'=>'FormbuilderController@hapuslisttemplate'
]);

Route::get('listtemplate/{id}',[

	'as'=>'listtemplate',
	'uses'=>'FormbuilderController@listtemplate'
]);

Route::post('updateformtempl',[

	'as'=>'updateformtempl',
	'uses'=>'FormbuilderController@updateformtempl'
]);

