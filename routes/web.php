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

Route::get('producto', 'ProductoController@index'); // Display a listing of the resource.

Route::get('producto/{producto_id?}', 'ProductoController@show'); //Display the specified resource.

Route::post('producto', 'ProductoController@store'); //Store a newly created resource in storage.

Route::put('producto/{producto_id?}', 'ProductoController@update'); //Update the specified resource in storage.

Route::delete('producto/{producto_id?}', 'ProductoController@destroy'); //Remove the specified resource from storage.