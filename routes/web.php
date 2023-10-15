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
})->name('login');


Auth::routes();



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

Route::post('/registerPropio', [App\Http\Controllers\CustomRegisterController2::class, 'register'])->name('registerPropio');


Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'index'])->name('cursos')->middleware('auth');

Route::post('/cursos', [App\Http\Controllers\CursosController::class, 'store'])->name('cursos.store')->middleware('auth');


Route::get('/semestres', [App\Http\Controllers\Semestrecontroller::class, 'index'])->name('semestres')->middleware('auth');

Route::post('/semestres', [App\Http\Controllers\Semestrecontroller::class, 'store'])->name('semestres.store')->middleware('auth');
Route::get('/cargaHoraria/{semestreId}', [App\Http\Controllers\CargaHorariaController::class, 'index'])->name('carga')->middleware('auth');
Route::post('/cargaHoraria/{semestreId}', [App\Http\Controllers\SemestreCursoDocenteController::class, 'store'])->name('semestres_curso_docente.store')->middleware('auth');

Route::get('/adminSession', function () {
    return view('adminSession');
})->middleware('auth')->name('admin');

Route::get('/normalSesion', [App\Http\Controllers\NormalSesionController::class, 'index'])->name('normalSesion')->middleware('auth');


Route::get('/semestreDocente/{semestreId}', [App\Http\Controllers\SemestreDocenteController::class, 'index'])->name('semestreDocente')->middleware('auth');
