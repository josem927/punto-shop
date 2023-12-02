<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MujeresController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/Blusas', function () {
    return Inertia::render('Blusas');
})->name('Blusas');

Route::get('/Faldas', function () {
    return Inertia::render('Faldas');
})->name('Faldas');

Route::get('/Vestidos', function () {
    return Inertia::render('Vestidos');
})->name('Vestidos');

Route::get('/Accesorios', function () {
    return Inertia::render('Accesorios');
})->name('Accesorios');


Route::get('/Playeras', function () {
    return Inertia::render('Playeras');
})->name('Playeras');

Route::get('/Pantalones', function () {
    return Inertia::render('Pantalones');
})->name('Pantalones');

Route::get('/Camisas', function () {
    return Inertia::render('Camisas');
})->name('Camisas');

Route::get('/Accesorios', function () {
    return Inertia::render('Accesorios');
})->name('Accesorios');

Route::get('/Playeras', function () {
    return Inertia::render('Playeras');
})->name('Playeras');

Route::get('/Conjuntos', function () {
    return Inertia::render('Conjuntos');
})->name('Conjuntos');

Route::get('/Zapatos', function () {
    return Inertia::render('Zapatos');
})->name('Zapatos');

Route::get('/Accesorios', function () {
    return Inertia::render('Accesorios');
})->name('Accesorios');
