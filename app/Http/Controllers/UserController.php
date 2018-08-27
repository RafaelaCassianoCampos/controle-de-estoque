<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function makeLogin()
    {
        return view('users.login');
    }

    public function login()
    {
    }
}
