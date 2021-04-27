<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\VillagesController;
use App\Http\Controllers\SearchController;
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
    return view('datang');
});


Route::get('/home',[HomeController::class,'index'])->middleware(['auth:sanctum','verified']);
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard')->middleware(['auth:sanctum','verified']);
// Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa')->middleware(['auth:sanctum','verified']);

//Search
Route::get('/search',[SearchController::class,'search'])->name('search')->middleware(['auth:sanctum','verified']);

//Places
Route::get('/cari', [PlacesController::class, 'cari']);
Route::get('/places',[PlacesController::class,'index'])->name('places')->middleware(['auth:sanctum','verified']);
Route::get('/places/create',[PlacesController::class,'create'])->name('places')->middleware(['auth:sanctum','verified']);
Route::get('/places/{place}',[PlacesController::class,'show'])->name('place')->middleware(['auth:sanctum','verified']);
Route::post('/places',[PlacesController::class,'store'])->name('places')->middleware(['auth:sanctum','verified']);
Route::delete('/places/{place}',[PlacesController::class,'destroy'])->name('place')->middleware(['auth:sanctum','verified']);
Route::get('/places/{place}/edit',[PlacesController::class,'edit'])->name('place')->middleware(['auth:sanctum','verified']);
Route::patch('/places/{place}',[PlacesController::class,'update'])->name('place')->middleware(['auth:sanctum','verified']);

//Villages
Route::get('/villages',[VillagesController::class,'index'])->name('villages')->middleware(['auth:sanctum','verified']);



