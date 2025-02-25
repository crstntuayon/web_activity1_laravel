<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home');
});


// Protected Routes (Authenticated Users Only)
//Route::middleware('auth')->group(function () {

    // Students Routes
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');  // Protected
    Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');  // Protected

    // Student Edit Routes
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');  // Protected
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');  // Protected

    // Student Delete Routes
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');  // Protected

    // Add new student (protected)
    Route::post('/add-new', [StudentController::class, 'addNewStudent'])->name('std.addNewStudent');  // Protected
//});

// Public Students View Route (If needed to be public)
Route::get('/', [StudentController::class, 'myView'])->name('std.myView'); // Public if required
