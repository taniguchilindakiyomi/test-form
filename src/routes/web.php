<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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


Route::get('/', [FormController::class, 'index']);
Route::post('/confirm', [FormController::class, 'confirm']);

Route::post('/thanks', [FormController::class, 'store']);


Route::middleware('auth')->group(function () {
        Route::get('/admin', [FormController::class, 'admin']);

});

