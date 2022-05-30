<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Cvcontroller;

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



//Home voor gebruikers
Route::get('/', [HomeController::class, 'dashboard'])->middleware('auth')->name('dashboard');

//CV inleveren
Route::get('/cv/create', [CvController::class, 'cvcreate'])->name('cv-create');
Route::post('/cv/create', [CvController::class, 'inputcreation'])->name('cv-store');

Route::get('/cv/single/{id}', [CvController::class, 'cvsingle'])->name('cv-single');
require __DIR__.'/auth.php';
