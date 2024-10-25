<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MateriaAbiertaController;

Route::get('/alumnos.index',[AlumnoController::class, 'index'])->name('alumnos.index');


Route::get('/alumnos.create',[AlumnoController::class,'create'])->name('alumnos.create');
Route::POST('/alumnos.store',[AlumnoController::class,'store'])->name('alumnos.store');


Route::get('/alumnos.edit/{alumno}',[AlumnoController::class,'edit'])->name('alumnos.edit');
Route::POST('/alumnos.update/{alumno}',[AlumnoController::class,'update'])->name('alumnos.update');

Route::get('/alumnos.show/{alumno}',[AlumnoController::class,'show'])->name('alumnos.show');
Route::POST('/alumnos.destroy/{alumno}',[AlumnoController::class,'destroy'])->name('alumnos.destroy');


Route::get('/puestos.index',[PuestoController::class, 'index'])->name('puestos.index');


Route::get('/puestos.create',[PuestoController::class,'create'])->name('puestos.create');
Route::POST('/puestos.store',[PuestoController::class,'store'])->name('puestos.store');


Route::get('/puestos.edit/{puesto}',[PuestoController::class,'edit'])->name('puestos.edit');
Route::POST('/puestos.update/{puesto}',[PuestoController::class,'update'])->name('puestos.update');

Route::get('/puestos.show/{puesto}',[PuestoController::class,'show'])->name('puestos.show');
Route::POST('/puestos.destroy/{puesto}',[PuestoController::class,'destroy'])->name('puestos.destroy');

//para Departamaentos
Route::get('/materias.index', [MateriaAbiertaController::class, 'index'])->name('materiasa.index');

Route::get('/plazas.index',[PlazaController::class, 'index'])->name('plaza.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
