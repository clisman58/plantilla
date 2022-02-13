<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Graduados\GraduadoController;

use App\Http\Controllers\Estudiante\EstudianteController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/graduados/index', [GraduadoController::class, 'index'])->name('graduados.index');

Route::get('/graduados/create', [GraduadoController::class, 'create'])->name('graduados.create');

Route::POST('/graduados/store', [GraduadoController::class, 'store'])->name('graduados.store');

Route::get('/graduados/edit/{id}', [GraduadoController::class, 'edit'])->name('graduados.edit');

Route::put('/graduados/update/{graduados}', [GraduadoController::class, 'update'])->name('graduados.update');

Route::get('/Estudiantes/index', [EstudianteController::class, 'index'])->name('Estudiantes.index');
