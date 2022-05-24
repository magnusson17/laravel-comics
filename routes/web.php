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

    $comics = config('comics');

    return view('home', ['comicsContainer' => $comics]);
})->name('home');


Route::get('/{id}', function ($id) {

    $comics = config('comics');

    if( is_numeric($id) && $id < count($comics) ) {
        $comic = $comics[$id];
        return view('comic', ['singleComicContainer' => $comic]);
    } else {
        abort(404);
    };

})->name('comic');
