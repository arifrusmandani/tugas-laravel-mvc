<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
    	return view('register');
    }

    public function register(Request $request)
    {
    	$firstname = $request->first_name;
    	$lastname = $request->last_name;
    	return view('welcome', [
            'firstname'    => $firstname,
            'lastname'    => $lastname,
        ]);
    }
}
