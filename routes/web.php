<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

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

require __DIR__.'/auth.php';
