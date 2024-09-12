<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookRentController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookRentController::class, 'index'])->name('book_rents.index');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
