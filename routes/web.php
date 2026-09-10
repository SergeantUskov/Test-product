<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/one', [PageController::class, 'first'])->name('first_page');
Route::get('/two', [PageController::class, 'second'])->name('second_page');