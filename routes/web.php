<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MembersListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [MembersListController::class, 'index'])->name('dashboard');

    Route::get('/member-create', [MembersListController::class, 'create'])->name('member-create');
    Route::post('/members', [MembersListController::class, 'store'])->name('member-store');

    Route::get('/member/{member}', [MembersListController::class, 'show'])->name('member-show');
    Route::get('/member/{member}/edit', [MembersListController::class, 'edit'])->name('member-edit');
    Route::put('/member/{member}', [MembersListController::class, 'update'])->name('member-update');
    Route::delete('/member/{member}', [MembersListController::class, 'destroy'])->name('member-destroy');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



