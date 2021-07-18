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

//routing mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-tambah', 'MahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa', 'MahasiswaController@simpan')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');

Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@hapus')->name('mahasiswa.hapus');



// rutter makul
Route::get('makul', 'makulcontroller@index')->name('makul');
Route::get('tambah-makul', 'makulcontroller@create')->name('tambah.makul');
Route::post('simpan-makul', 'makulcontroller@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulcontroller@edit')->name('edit.makul');
Route::post('update-makul/{id}', 'makulcontroller@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'makulcontroller@destroy')->name('hapus.makul');

//Routter Nilai
Route::get('nilai', 'nilaicontroller@index')->name('nilai');
Route::get('nilai-create', 'nilaicontroller@create')->name('nilai.create');
Route::post('nilai-simpan', 'nilaicontroller@store')->name('nilai.simpan');
Route::get('nilai-edit/{id}', 'nilaicontroller@edit')->name('nilai.edit');

Route::post('nilai-update/{id}', 'nilaicontroller@update')->name('nilai.update');
Route::get('nilai-hapus/{id}', 'nilaicontroller@destroy')->name('nilai.hapus');