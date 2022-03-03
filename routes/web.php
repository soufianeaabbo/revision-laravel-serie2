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
    return view('welcome');
});

Route::get('/nom', function () {
    return view('nom');
})->name('nom');

Route::get('/prenom', function () {
    return view('prenom');
});

Route::get('/age', function () {
    return view('age');
});

Route::get('/template', function () {
    return view('template');
});












