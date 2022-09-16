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
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', ['comics'=> $comics]);
})->name('comics');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');



Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/comic/{id}', function ($id) {
$comics = config('comics');
if(!is_numeric($id) || $id < 0 || $id >= count($comics)){
abort(404);
}
$comic = $comics[$id];
    return view('comic', compact('comic'));
})->name('comic');