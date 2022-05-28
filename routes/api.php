<?php

use App\Http\Controllers\TaskController;
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

Route::get('/task/{id}', [TaskController::class, 'getById']);

Route::post('/task/{id}', [TaskController::class, 'store']);

Route::put('/task/{id}', [TaskController::class, 'updateById']);

Route::delete('/task/{id}', [TaskController::class, 'deleteById']);
