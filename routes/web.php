<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
Route::get('dataTableUSer', 'UserController@dataTable')->name('dataTableUser');

Route::resource('roles', 'RolesController');
Route::get('dataTableRoles', 'RolesController@dataTable')->name('dataTableRoles');

Route::resource('configuracion', 'configuracionController');
Route::get('dataTableConfiguracion', 'configuracionController@dataTable')->name('dataTableConfiguracion');

Route::resource('actividades', 'actividadesController');
Route::get('dataTableActividadess', 'actividadesController@dataTable')->name('dataTableActividadess');

Route::resource('entrenadores', 'entrenadoresController');
Route::get('dataTableEntrenadores', 'entrenadoresController@dataTable')->name('dataTableEntrenadores');