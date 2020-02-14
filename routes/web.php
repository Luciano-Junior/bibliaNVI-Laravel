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

Route::get('/', ['as'=>'welcome','uses'=>'Controller@welcome']);
Route::get('/book/{cod}/{livro}', ['as'=>'book','uses'=>'Controller@chapter']);
Route::get('/verse/{livro}/{book}/{cod}', ['as'=>'verse','uses'=>'Controller@verse']);