<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('photography-and-video', [PageController::class, 'photography'])->name('pages.photography');
Route::get('social-media-management', [PageController::class, 'social'])->name('pages.social');
Route::get('graphic-design', [PageController::class, 'graphic'])->name('pages.graphic');
Route::get('web-design', [PageController::class, 'web'])->name('pages.web');
