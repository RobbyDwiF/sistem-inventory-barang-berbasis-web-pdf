<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for Barang (Inventory Items)
    Route::resource('barangs', BarangController::class);
    Route::get('/barangs/pdf/generate', [BarangController::class, 'generatePDF'])->name('barangs.pdf');
    Route::get('/barangs/{id}/pdf', [BarangController::class, 'generateSinglePDF'])->name('barangs.pdf.single');
});

require __DIR__.'/auth.php';
