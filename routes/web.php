<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;



Route::get('/books', [BooksController::class,'index']);
Route::get('/', function () {
    return view('welcome');
});