<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');
Route::view('/contact', 'contact');
/*
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
*/
/*
Route::controller(JobController::class)->group(function () {
   Route::get('/jobs', 'index');
   Route::get('/jobs/create', 'create');
   Route::get('/jobs/{job}', 'show');
   Route::post('/jobs', 'store');
   Route::get('/jobs/{job}/edit', 'edit');
   Route::patch('/jobs/{job}', 'update');
   Route::delete('/jobs/{job}', 'destroy');
});
*/
Route::resource('/jobs', JobController::class);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);  
Route::post('/login', [SessionController::class, 'store']);


