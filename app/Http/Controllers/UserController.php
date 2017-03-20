<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
    public function register()
    {
        return view('users.register');
    }

    public function  store(Request $request)
    {

    }
}
