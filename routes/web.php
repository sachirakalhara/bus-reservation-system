<?php

use App\Http\Controllers\BusController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\Sub_RegionController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::Resource('/operator', OperatorController::class);
Route::Resource('/bus', BusController::class);
Route::Resource('/region', RegionController::class);
Route::Resource('/sub-region', Sub_RegionController::class);

// Operator Routes
// Route::Resource('operator', 'OperatorController');

//  Bus Route
// Route::Resource('bus','BusController');

//  Region Route
// Route::Resource('region','RegionController');

//  Sub Region Route
// Route::Resource('sub-region','Sub_RegionController');