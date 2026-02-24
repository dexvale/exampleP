<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
   return view('jobs', [
      'jobs' => [
         [
            'id' => '1',
            'title' => 'Director',
            'salary' => '$50,000'
         ],
         [
            'id' => '2',
            'title' => 'Programmer',
            'salary' => '$10,000'
         ],
         [
            'id' => '3',
            'title' => 'Teacher',
            'salary' => '$40,000'
         ]
      ]
    ]);
});

Route::get('/job/{id}', function ($id) {
   $data = [
      'jobs' => [
         [
            'id' => '1',
            'title' => 'Director',
            'salary' => '$50,000'
         ],
         [
            'id' => '2',
            'title' => 'Programmer',
            'salary' => '$10,000'
         ],
         [
            'id' => '3',
            'title' => 'Teacher',
            'salary' => '$40,000'
         ]
      ]
   ];
$foundJob = \Illuminate\Support\Arr::first($data['jobs'], fn($job) => $job['id'] == $id);
if (! $foundJob) {
       abort(404);
   }
return view('job', ['job' => $foundJob]);
});

Route::get('/contact', function () {
   return view('contact');
});