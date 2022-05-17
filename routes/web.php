<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;


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
Route::view('/','home')->name('home');
Route::get('api',[ApiController::class,'index'])->name('api');
Route::post('api',[ApiController::class,'store'])->name('api1');
Route::get('api/{id}',[ApiController::class, 'show'])->name('api2'); // nueva funcionalidad