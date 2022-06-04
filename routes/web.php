<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/movie', function () {
     $popularMovies=Http::withToken(config('698e2ed7adec5c43d05f615374de9c46'))->get('https://api.themoviedb.org/3/movie/popular')->json();//['Results'];
        dd($popularMovies);
    return view('show');
});


//Route::get('/index',MoviesController::class,'index');
