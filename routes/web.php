<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datamatkul',[MatkulController::class, 'index'])->name('datamatkul');


Route::get('/tambahmatakuliah',[MatkulController::class, 'tambahmatakuliah'])->name('tambahmatakuliah');
Route::post('/tambahdata',[MatkulController::class, 'tambahdata'])->name('tambahdata');

Route::get('/tampilkandata/{id}',[MatkulController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[MatkulController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[MatkulController::class, 'delete'])->name('delete');
