<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\CourseController; // Student controller
use Illuminate\Support\Facades\Route;

// -------------------------
// Public Route
// -------------------------
Route::get('/', function () {
    return view('welcome');
});

// -------------------------
// Dashboard (Authenticated & Verified)
// -------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// -------------------------
// Profile Routes (Authenticated)
// -------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// -------------------------
// Admin Routes (CRUD for Courses)
// -------------------------
Route::prefix('admin')->middleware(['auth','role:admin'])->name('admin.')->group(function () {
    Route::resource('courses', AdminCourseController::class);
});

// -------------------------
// Student Routes (View & Enroll Courses)
// -------------------------
Route::middleware(['auth','role:student'])->group(function() {
    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    Route::post('courses/{course}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');
});

require __DIR__.'/auth.php';
