<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Guest\TrainController;

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

    $title = 'Laravel Migration Seeder';

    return view('welcome', ['title'=> $title]);
});

Route::get('/trains', [TrainController::class, 'index'])->name('trains');
Route::get('/show', [TrainController::class, 'show'])->name('trains.show');