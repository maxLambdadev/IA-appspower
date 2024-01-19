<?php 

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeAppspowerController::class, 'index'])->name('index');