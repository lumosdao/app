<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DaoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'home'])->name('home');
Route::prefix('dao')->name('dao')->group(function () {
    Route::get('/', [DaoController::class, 'index'])->name('');
    Route::get('create', [DaoController::class, 'create'])->name('.create');
    Route::post('store', [DaoController::class, 'store'])->name('.store');
});
Route::prefix('proposal')->name('proposal')->group(function () {
    Route::get('/', [ProposalController::class, 'index'])->name('');
    Route::get('create', [ProposalController::class, 'create'])->name('.create');
    Route::post('store', [ProposalController::class, 'store'])->name('.store');
});
Route::get('/.well-known/stellar.toml', function () {
    return view('stellar');
});
Route::get('explore', [AppController::class, 'home'])->name('explore');

// Should be last route in current prefix group
Route::get('/{page}', [PageController::class, 'show'])->name('page');
