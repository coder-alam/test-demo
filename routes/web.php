<?php

use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/demo', [DemoController::class, 'index'])->name('demo.index');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index']);
// });
