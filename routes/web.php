<?php

use App\Http\Controllers\ScoreController;

Route::get('/', [ScoreController::class, 'index']);
Route::post('/score', [ScoreController::class, 'store'])->name('score.store');