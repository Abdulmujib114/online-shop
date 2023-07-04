<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\amstoreController;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [amstoreController::class, 'index'])->name('amstore.index');
    Route::get('/amstores/create', [amstoreController::class, 'create'])->name('amstore.create');
    Route::post('/amstores/store', [amstoreController::class, 'store'])->name('amstore.store');
    Route::get('/amstores/show/{amstore}', [amstoreController::class, 'show'])->name('amstore.show');
    Route::get('/amstores/edit/{amstore}', [amstoreController::class, 'edit'])->name('amstore.edit');
    Route::get('/amstores/destroy/{amstore}', [amstoreController::class, 'destroy'])->name('amstore.destroy');
    Route::put('/amstores/update/{amstore}', [amstoreController::class, 'update'])->name('amstore.update');
});

require __DIR__.'/auth.php';
