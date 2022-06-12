<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
use App\http\Controllers\TvController;

Route::get('/welcome', function () {
 
    return view('welcome');
})->name('welcome');

Route::get('/',[MoviesController::class,'index'])->name('movie');

Route::get('/movie/{id}/show',[MoviesController::class, 'show'])->name('movie.show');
Route::get('/actors',[ActorsController::class,'index'])->name('actors');

Route::get('/tvshows',[TvController::class,'index'])->name('tv');
Route::get('/tv/{id}/show',[TvController::class, 'show'])->name('tv.show');