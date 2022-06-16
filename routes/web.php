<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayPalController;

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

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');
Route::post('/')->name('home');

Route::post('charge' ,[PaymentController::class,'charge']);
// Route::get('/transactions' ,[PaymentController::class,'transactions']);
// Route::post('success' ,[PaymentController::class,'success']);
// Route::post('error' ,[PaymentController::class,'error']);



