<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('doctors', 'DoctorController');
Route::get('doctors/{id}/delete', 'DoctorController@destroy')->name('doctors.destroy');
