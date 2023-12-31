<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookController;

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

/* Home */
Route::get('/', [HomeController::class, 'home'])->name('home');

/* Movies */
Route::get('/movies', [MovieController::class, 'index'])->name('movies');

Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');


/* Books */
Route::get('/books', [BookController::class, 'index'])->name('books');

Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
