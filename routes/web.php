<?php

use App\Http\Controllers\SignatureController;
use Illuminate\Support\Facades\Route;

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

Route::controller(SignatureController::class)->group(function () {
    Route::get('/sign', 'index');
    Route::post('/upload-sign', 'upload');
    Route::get('/show-sign', 'show_sign');
});
