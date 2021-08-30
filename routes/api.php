<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('publicaciones', PublicacionController::class);

//Route::resource('ventas', [VentaController::class,'index'])->('index');

Route::get('publicaciones',[PublicacionController::class,'index'])->name('index');
Route::get('publicaciones/total',[PublicacionController::class,'mayorPublicaciones'])
    ->name('mayorPublicaciones');

Route::get('ventas',[VentaController::class,'index'])->name('index');
Route::get('ventas/total',[VentaController::class,'totalVentas'])->name('totalVentas');

