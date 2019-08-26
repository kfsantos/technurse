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


Route::get('/', 'UsuarioController@index')->name('login');
Route::post('/autenticar', 'UsuarioController@autenticar')->name('autenticar');
Route::get('/formulario', 'UsuarioController@formulario')->name('formulario');
Route::post('/formulario', 'UsuarioController@salvar')->name('salvar');
Route::get('/administracao', 'UsuarioController@administracao')->name('administracao');    
Route::get('/logout', 'UsuarioController@logout')->name('logout');    

Route::get('/lista', 'UsuarioController@listarNurses')->name('lista'); 


