<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/subscriptions', [SubscriptionController::class, 'viewSubscriptions'])->name('subscriptions');
    Route::get('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
    Route::post('/payment/callback', [SubscriptionController::class, 'store'])->name('razorpay.payment.store');
    Route::get('History', [SubscriptionController::class, 'history'])->name('history');
});

require __DIR__.'/auth.php';
