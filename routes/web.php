<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman depan profile
Route::get('/', [ProfileController::class, 'index']);

// Admin dashboard
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// Kontak
Route::post('/kontak', [PesanController::class, 'store'])->name('kontak.kirim');
Route::get('admin/pesan', [PesanController::class, 'admin'])->name('admin.pesan');

// Pengalaman (resource route, termasuk edit & update)
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('pengalaman', PengalamanController::class)
        ->except(['show']);
});
