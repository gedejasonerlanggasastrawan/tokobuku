<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\RatingController;
use App\Models\Author;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [BookController::class, 'index']);
// Route::get('/authors', [BookController::class, 'topAuthors']);
// Route::get('/rating', [BookController::class, 'submitRating']);

// Route::get('/books', [BookController::class, 'index']);
// Route::get('/top-authors', [AuthorController::class, 'top']);

// Route::get('/rate', [RatingController::class, 'create']);
// Route::post('/rate', [RatingController::class, 'store']);

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/top-authors', [AuthorController::class, 'top'])->name('authors.top');
Route::get('/rate', [RatingController::class, 'create'])->name('rate.create');
Route::post('/rate', [RatingController::class, 'store'])->name('rate.store');

Route::get('/getBooks/{author_id}', [RatingController::class, 'getBooks']);




