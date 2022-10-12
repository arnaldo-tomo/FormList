<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('', 'loginController@index')->name('home');

Route::get('admin', 'loginController@admin')->name('admin');

Route::post('auth', 'loginController@auth')->name('auth');

Route::post('registar', 'loginController@registar')->name('registar');
Route::get('logout', 'loginController@logout')->name('logout');

Route::get('dashboard', 'loginController@dashboard')->name('dashboard');
Route::get('sessao', 'LoginController@sessao')->name('sessao');
Route::get('rela', 'relacao@rela')->name('rela');