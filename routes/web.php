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

Auth::routes();

// Nueva ruta para el landing page (pública)
Route::get('/', function () {
    return view('landingpage');
})->name('landing');

// Nueva ruta para el dashboard (protegida)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
