<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    sleep(2);
    return Inertia::render('Home');
});


Route::get('/users', function () {
    sleep(2);
    return Inertia::render('Users');
});


Route::get('/settings', function () {
    sleep(2);
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('Logging the user out');
});
