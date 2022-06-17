<?php

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

Route::get('/', function () {
    $comics = config('comicsDb.comics');
    //dd($comics);
    return view('mainContent', compact('comics'));
})->name('home.index');



Route::get('/{id}', function ($id) {
    $comics = config('comicsDb.comics');
    $comic = $comics[$id];
    return view('comics.show', compact('comic'));
})->name('single-comic.show');



Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comicsDb.comics');
    return view('comics', compact('comics'));
})->name('comics.index');

/* Route::get('/comics{id}', function ($id) {
    $comics = config('comicsDb.comics');
    //dd($comics);
    $comic = $comics[$id];
    return view('comics.show', compact('comic'));
})->name('single-comic'); */

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');




