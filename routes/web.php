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

    $eroi = config('eroi');

    return view('home', ['array' => $eroi]);
})->name('home');


Route::get('/eroe/{id}', function ($id) {

    $eroi = config('eroi');

    return view('eroe', ['array' => $eroi]);
})->name('eroe');
