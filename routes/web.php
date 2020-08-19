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

//Route::resource('fx', 'FxController');
//Route::resource('pta', 'PTAController');
Route::get('/fx', 'FxController@index')->name('fx');

Route::post('/fx-save', 'FxController@store')->name('fx-save');

Route::get('/fx-edit/{fx_id}', 'FxControllerr@edit')->name('fx-edit');

Route::patch('/fx-update/{fx_id}', 'FxController@update')->name('fx-update');

Route::delete('/fx-delete/{fx_id}', 'FxController@destroy')->name('fx-delete');


Route::get('/pta', 'PTAController@index')->name('pta');

Route::post('/pta-save', 'PTAController@store')->name('pta-save');

Route::get('/pta-edit/{pta_rate_id}', 'PTAController@edit')->name('pta-edit');

Route::patch('/pta-update/{pta_rate_id}', 'PTAController@update')->name('pta-update');

Route::delete('/pta-delete/{pta_rate_id}', 'PTAController@delete')->name('pta-delete');


Route::get('/interestRate', 'InterestRateController@index')->name('interestRate');

Route::post('/interestRate-save', 'InterestRateController@store')->name('interestRate-save');

Route::get('/interestRate-edit/{interest_rate_id}', 'InterestRateController@edit')->name('interestRate-edit');

Route::patch('/interestRate-update/{interest_rate_id}', 'InterestRateController@update')->name('interestRate-update');

Route::delete('/interestRate-delete/{interest_rate_id}', 'InterestRateController@destroy')->name('interestRate-delete');

