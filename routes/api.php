<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//rota principal
Route::get('/clients', [ClientController::class, 'index']); 
//Envio para banco de dados
Route::post('/clients', [ClientController::class, 'store']); 
//Pesquisar pelo id
Route::get('clients/{id}', [ClientController::class, 'show']); 
