<?php

use App\Http\Controllers\DownsizeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PaketReboundDownsizeController;
use App\Http\Controllers\ReboundController;
use App\Http\Controllers\UpgradeController;
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


Route::get('/',[HomeController::class,'index']);
Route::get('/rebound',[ReboundController::class,'index']);
Route::get('/downsize',[DownsizeController::class,'index']);
Route::get('/maintenance',[MaintenanceController::class,'index']);
Route::get('/upgrade',[UpgradeController::class,'index']);
Route::get('/paket rebound & downsize',[PaketReboundDownsizeController::class,'index']);
Route::get('/maps',function(){
    return view('maps');
});

