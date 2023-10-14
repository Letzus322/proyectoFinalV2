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


Auth::routes();

Route::get('/adminSession', function () {
    return view('auth.adminSession');
    // Solo los usuarios autenticados pueden acceder aquí
})->middleware('auth');
Route::get('/home', function () {
    return view('home');
    // Solo los usuarios autenticados pueden acceder aquí
})->middleware('auth')->name('adminView');

Route::get('/normalSession', function () {
    return view('auth.normalSession');
    // Solo los usuarios autenticados pueden acceder aquí
})->middleware('auth');

Route::get('/profesores', function () {
    return view('registrarProfesores');
})->name('profesores')->middleware('auth');

Route::get('/profesores', [App\Http\Controllers\UserController::class, 'mostrarDatos'])->name('profesores')->middleware('auth');
