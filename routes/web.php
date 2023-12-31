<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
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
    return Inertia::render('Home');
});


Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::query()
            ->when(Request::input('search'), function ($query, $search){
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name
            ])
    ]);
});


Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('Logging the user out');
});
