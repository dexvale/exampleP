<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create()
    {
       return view('auth.register');
    }

    public function store(){
         //validate the form
         //create the user in db
         //log in
         //redirect
         request()->validate([
           'first_name' => ['required'],
           'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'email_verified_at' => ['nullable', 'date'],
            'password' => ['required', 'confirmed'],
            'remember_token' => ['nullable']
         ]);   
    }

}
