<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{studentId}', [StudentController::class, 'show']);
Route::get('/students/{studentId}/edit', [StudentController::class, 'edit']);
Route::post('/students/{studentId}/update', [StudentController::class, 'update']);
Route::get('/students/{studentId}/delete', [StudentController::class, 'delete']);
Route::post('/students/{studentId}/destroy', [StudentController::class, 'destroy']);