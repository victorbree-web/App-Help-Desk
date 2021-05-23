<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\routeController;


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

Route::get('/home', [routeController::class, 'home']);
Route::get('/abrir_chamado', [routeController::class, 'abrir_chamado']);
Route::get('/consultar_chamado', [routeController::class, 'consultar_chamado']);

Route::POST('/new_chamado', [routeController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
