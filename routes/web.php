<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
<<<<<<< HEAD
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
=======
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
>>>>>>> df0b6d6d897b6edc88e590c585531fa2e222707a
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::view('login', 'auth/Login');
=======
Route::view('login','auth/login');
Route::view('register','auth/register');
>>>>>>> df0b6d6d897b6edc88e590c585531fa2e222707a
