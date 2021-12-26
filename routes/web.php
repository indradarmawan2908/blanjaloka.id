<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

//------------------------------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => True]);
Route::get('customer','App\Http\Controllers\customer@index')->name('customer');

//--------------------------------------------------------------------------------------------------

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'App\Http\Controllers\DashboardController@index');
  });

  require __DIR__.'/auth.php';

//------------------------------------------------------------------------------------------------
//PengelolaPasar
Route::get('pengelolapasar','App\Http\Controllers\PengelolaPasarController@index');
Route::get('pengelolapasar/create','App\Http\Controllers\PengelolaPasarController@create');
Route::post('pengelolapasar','App\Http\Controllers\PengelolaPasarController@pengelola');


    //Customer
Route::get('customer','App\Http\Controllers\CustomerController@index');
Route::get('customer/create','App\Http\Controllers\CustomerController@create');
Route::post('customer','App\Http\Controllers\CustomerController@input');

    //Driver
Route::get('driver','App\Http\Controllers\DriverController@index');
Route::get('driver/create','App\Http\Controllers\DriverController@create');
Route::post('driver', 'App\Http\Controllers\DriverController@drive');

Route::get('driver/delete/{kode_driver}','App\Http\Controllers\DriverController@delete');
Route::get('driver/edit/{kode_driver}','App\Http\Controllers\DriverController@edit');
Route::post('driver/update/{kode_driver}', 'App\Http\Controllers\DriverController@update');
Route::get('read/{kode_driver}','App\Http\Controllers\DriverController@read');

    //Pedagang
Route::get('pedagang','App\Http\Controllers\PedagangController@index');
Route::get('pedagang/create','App\Http\Controllers\PedagangController@create');
Route::post('pedagang','App\Http\Controllers\PedagangController@pedagangg');

Route::get('pedagang/delete/{id_pedagang}','App\Http\Controllers\PedagangController@delete');
Route::get('pedagang/edit/{id_pedagang}','App\Http\Controllers\PedagangController@edit');
Route::post('pedagang/update/{id_pedagang}', 'App\Http\Controllers\PedagangController@update');
Route::get('read/{id_pedagang}','App\Http\Controllers\PedagangController@read');

    //SewaToko
Route::get('sewatoko','App\Http\Controllers\SewaTokoController@index');
Route::get('sewatoko/create','App\Http\Controllers\SewaTokoController@create');
Route::post('sewatoko', 'App\Http\Controllers\SewaTokoController@insert');

Route::get('sewatoko/delete/{kode_toko}','App\Http\Controllers\SewaTokoController@delete');
Route::get('sewatoko/edit/{kode_toko}','App\Http\Controllers\SewaTokoController@edit');
Route::post('sewatoko/update/{kode_toko}', 'App\Http\Controllers\SewaTokoController@update');
Route::get('read/{kode_toko}','App\Http\Controllers\SewaTokoController@read');

    //EditProduk
Route::get('index7','App\Http\Controllers\EditProdukController@index');
Route::get('back','App\Http\Controllers\/EditProdukController@back');
Route::get('create','App\Http\Controllers\/EditProdukController@create');
Route::post('insert', 'App\Http\Controllers\EditProdukController@insert');
Route::get('delete/{kode_produk}','EditProdukController@delete');
Route::get('edit/{kode_produk}','App\Http\Controllers\EditProdukController@edit');
Route::post('update/{kode_produk}', 'App\Http\Controllers\EditProdukController@update');
Route::get('read/{kode_produk}','App\Http\Controllers\EditProdukController@read');

    //Data Pasar
Route::get('datapasar','App\Http\Controllers\DataPasarController@index');
Route::get('datapasar/create','App\Http\Controllers\DataPasarController@create');
Route::post('/datapasar', 'App\Http\Controllers\DataPasarController@datapasa');

Route::get('datapasar/delete/{id_datapasar}','App\Http\Controllers\DataPasarController@delete');
Route::get('/datapasar/edit/{id_datapasar}','App\Http\Controllers\DataPasarController@edit');
Route::post('/datapasar/update/{id_datapasar}', 'App\Http\Controllers\DataPasarController@update');
Route::get('read/{id_datapasar}','App\Http\Controllers\DataPasarController@read');

//Stok Gudang
Route::get('index10','App\Http\Controllers\StokGudangController@index');
Route::get('back','App\Http\Controllers\StokGudangController@back');
Route::get('create','App\Http\Controllers\StokGudangController@create');
Route::post('insert', 'App\Http\Controllers\StokGudangController@insert');
Route::get('edit/{id_stok_gudang}','App\Http\Controllers\StokGudangController@edit');
Route::post('update/{id_stok_gudang}', 'App\Http\Controllers\StokGudangController@update');
Route::get('read/{id_stok_gudang}','App\Http\Controllers\StokGudangController@read');

//Toko
Route::get('toko','App\Http\Controllers\TokoController@index');
Route::get('toko/create','App\Http\Controllers\TokoController@create');
Route::post('toko','App\Http\Controllers\TokoController@store');
Route::get('toko/delete/{id_toko}','App\Http\Controllers\TokoController@delete');
Route::get('toko/edit/{id_toko}','App\Http\Controllers\TokoController@edit');
Route::post('toko/update/{id_toko}', 'App\Http\Controllers\TokoController@update');
Route::get('read/{id_toko}','App\Http\Controllers\TokoController@read');


