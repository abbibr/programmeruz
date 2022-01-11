<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChellengeController;

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

Route::get('/', [HomeController::class,'getAll'])->name('getAll');

Route::post('image', [HomeController::class,'image'])->name('image');

Route::post('files', [HomeController::class,'files'])->name('files');

Route::get('transformation/{id}', [ChellengeController::class,'transformation'])->name('transformation');

Route::post('add', [ChellengeController::class,'add'])->name('add');
