<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/gallery/{id}', [GalleryController::class,'show'])->name('gallery.show');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});