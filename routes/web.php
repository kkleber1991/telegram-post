<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MercadoLivreCredentialController;
use App\Http\Controllers\ApiIntegrationController;
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
    Route::get('/api-integration', [ApiIntegrationController::class, 'index'])
        ->name('api.integration');
    Route::post('/mercadolivre/credentials', [ApiIntegrationController::class, 'storeMercadoLivre'])
        ->name('mercadolivre.credentials.store');
    Route::post('/etsy/credentials', [ApiIntegrationController::class, 'storeEtsy'])
        ->name('etsy.credentials.store');
    Route::get('/etsy/auth/redirect', [ApiIntegrationController::class, 'redirectToEtsy'])
        ->name('etsy.auth.redirect');
    Route::get('/etsy/auth/callback', [ApiIntegrationController::class, 'handleEtsyCallback'])
        ->name('etsy.auth.callback');
});

require __DIR__.'/auth.php';
