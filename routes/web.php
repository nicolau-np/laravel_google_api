<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('news')->group(function(){
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/{id}',[NewsController::class, 'show']);
});


Route::prefix('videos')->group(function(){
    Route::get('/{id}', [ApiController::class, 'show']);
    Route::get('/', [ApiController::class, 'index']);
});

