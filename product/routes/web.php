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
    return view('login.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/order', 'OrderController@order');
Route::post('/save', 'OrderController@saveorder');
Route::get('/supply/view', 'OrderController@supplyview');






Route::get('/supply', 'supplyController@supply');

Route::post('/savesupply', 'SupplyController@savesupply');

Route::get('/product/view', 'supplyController@orderview');




Route::post('/login/custom', [

'uses' => 'CustomLoginController@login',

'as' => 'login.custom'


]);



Route::get('/loginback', function () {
    return view('login.login');
});