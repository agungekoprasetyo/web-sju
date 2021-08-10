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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/asuransimobil', 'DashboardController@mobil')->name('asuransimobil');
Route::get('/asuransimotor', 'DashboardController@motor')->name('asuransimotor');
Route::get('/asuransirumah', 'DashboardController@rumah')->name('asuransirumah');
Route::get('/asuransikesehatan', 'DashboardController@kesehatan')->name('asuransikesehatan');
Route::get('/asuransijaminan', 'DashboardController@jaminan')->name('asuransijaminan');
Route::get('/asuransikecelakaan', 'DashboardController@kecelakaan')->name('asuransikecelakaan');

Route::get('/faq', 'DashboardController@faq')->name('faq');
Route::get('/tentangkami', 'DashboardController@tentangkami')->name('tentangkami');
Route::get('/artikel', 'DashboardController@artikel')->name('artikel');
Route::get('/produk', 'DashboardController@produk')->name('produk');
Route::get('/klaimproduk', 'DashboardController@klaimproduk')->name('klaimproduk');








