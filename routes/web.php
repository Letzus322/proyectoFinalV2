<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/prueba', function () {
   
    return view('prueba');

})->name('prueba');

Auth::routes();

Route::get('/home', function () {
    return view('home');
    // Solo los usuarios autenticados pueden acceder aquí
})->middleware('auth')->name('adminView');