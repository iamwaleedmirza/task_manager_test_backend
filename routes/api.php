<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('tasks', TaskController::class);
Route::get('/tasks/upcoming', [TaskController::class,'upcoming'])->name('tasks.upcoming');
