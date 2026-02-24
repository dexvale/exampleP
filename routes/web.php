<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Support\Arr;

Route::get('/', function () {
   return view('home');
});

Route::get('/jobs', function () {
   return view('jobs', [
      'jobs' => Job::all()
   ]);
});

Route::get('/job/{id}', function ($id){

   $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
   return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
   return view('contact');
});
