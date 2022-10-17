<?php

use App\Http\Controllers\API\ListJurusanKampus;
use App\Http\Controllers\API\MengikutiKampus;
use App\Http\Controllers\API\PencarianKampus;
use App\Models\JurusanCampus;
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

Route::get('/pencarian-kampus/', [PencarianKampus::class, 'index']);
Route::get('/pencarian-kampus/{search}', [PencarianKampus::class, 'show']);

Route::get('/mengikuti-kampus/{id}', [MengikutiKampus::class, 'index']);
Route::get('/jurusan-kampus/{id}', [ListJurusanKampus::class, 'index']);
