<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Define the homepage route
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard'); // Redirect to the dashboard if authenticated
    }
    return view('welcome'); // Show welcome page for unauthenticated users
});

// Define the dashboard route with middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group routes that require authentication
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Resource route for authors
    Route::resource('authors', AuthorController::class);

    // Book routes
    Route::get('books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('books/store', [BookController::class, 'store'])->name('books.store');
    Route::delete('books/{bookId}', [BookController::class, 'destroy'])->name('books.destroy');
    Route::get('books/search', [BookController::class, 'search'])->name('books.search');
});

// Load authentication routes
require __DIR__.'/auth.php';
