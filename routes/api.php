<?php

use App\Http\Controllers\StoresController;
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

Route::post('auth/new/user', [\App\Http\Controllers\Api\AuthController::class, 'create']);
Route::post('auth/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);


Route::group(['middleware' => ['apiJwt']], function (){

    Route::post('auth/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);

    Route::get('stores', [\App\Http\Controllers\Core\StoresController::class, 'index']);
    Route::post('new/stores', [\App\Http\Controllers\Core\StoresController::class, 'store']);


});
