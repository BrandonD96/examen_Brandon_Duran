<?php

use App\Http\Controllers\VideoJuegoController;
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

Route::get('',[VideoJuegoController::class,'mostrarTodo'])->name('mostrarTodas.videojuegos');
Route::get('/juego/{id}',[VideoJuegoController::class,'mostrarJuego'])->name('mostrarJuego.videojuegos');
Route::get('/busqueda/{genero}',[VideoJuegoController::class,'busquedaGenero'])->name('busquedaGenero.videojuegos');
Route::get('/busqueda/plataforma/{plataforma}',[VideoJuegoController::class,'busquedaPlataforma'])->name('busquedaPlataforma.videojuegos');