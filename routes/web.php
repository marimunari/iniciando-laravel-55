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

Route::group(['prefix' => '/'], function () {
    Route::get('cliente/register', 'ClientsController@register');
    Route::get('env', function () {
        var_dump(env('NOME'));
    });
});

Route::group(['prefix' => '/admin'], function () {
    Route::get('client', 'ClientsController@show');
    Route::get('client/form-register', 'ClientsController@formRegister');
    Route::post('client/register', 'ClientsController@register');
    Route::get('client/{id}/form-edita', 'ClientsController@formEdit');
    Route::post('client/{id}/edit', 'ClientsController@edit');
    Route::get('client/{id}/delete', 'ClientsController@delete');
});
