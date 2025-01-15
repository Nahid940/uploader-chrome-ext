<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::prefix('product')->group(function () {
    Route::get('/{code}', [ProductController::class, 'searchByCode'])->name('searchByCode');
});
