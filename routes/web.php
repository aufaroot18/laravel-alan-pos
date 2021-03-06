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

// Barang routes
route::resource('barang', 'BarangController')->middleware('auth');

// Kasir
route::get('kasir/print', 'KasirController@print')->name('kasir.print');
route::delete('kasir/clear', 'KasirController@clear')->name('kasir.clear');
route::resource('kasir', 'KasirController')->middleware('auth');
