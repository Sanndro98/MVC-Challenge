<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
    	return view('register');
    }
    public function welcome(Request $request)
    {
    	$first = $request['first_name'];
    	$last = $request['last_name'];
    	return view('welcome', ['first' => $first,'last'=>$last]);
    }
}
