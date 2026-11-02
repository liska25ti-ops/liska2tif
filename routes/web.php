<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/question/respon', function () {
    return view('home-question-respon');
})->name('question.respon');
