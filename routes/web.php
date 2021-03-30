<?php

use Illuminate\Support\Facades\Route;
Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::prefix('siswa')->name('siswa.')->group(function(){
        Route::get('/daftar/siswa', 'DaftarController@index')->name('daftar');
        Route::post('/daftar/store', 'DaftarController@store')->name('store');
    });
    Route::get('/admin/login', function () {
        return view('auth.login');
    });
});        
Route::middleware('auth')->group(function(){
    Route::get('/index/siswa/admin', 'SiswaController@index')->name('admin.siswa.index');
    Route::get('/create/siswa/admin', 'SiswaController@create')->name('admin.siswa.create');
    Route::post('/store/siswa/admin', 'SiswaController@store')->name('admin.siswa.store');
    Route::get  ('/siswa/admin/{id}/edit', 'SiswaController@edit')->name('admin.siswa.edit');
    Route::patch('/siswa/admin/{id}/update', 'SiswaController@update')->name('admin.siswa.update');
    Route::delete('/siswa/admin/{id}/destroy', 'SiswaController@destroy')->name('admin.siswa.destroy');
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::get('/{id}/pdf_siswa', 'DaftarController@pdf')->name('siswa.pdf');
Auth::routes(); 
