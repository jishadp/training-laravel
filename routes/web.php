<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('list', [StudentController::class,'list'])->name('student.index');
Route::get('new', [StudentController::class,'new'])->name('student.create');
Route::post('save', [StudentController::class,'save'])->name('student.save');

Route::post('delete', [StudentController::class,'delete'])->name('student.delete');



// ADD
// COMMIT
// PUSH
// PULL
