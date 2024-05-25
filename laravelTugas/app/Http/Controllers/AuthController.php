<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view(('pages.register'));
    }

    public function welcome(Request $request) {
        $fname = $request['fname'];
        $lname = $request['lname'];

        return view('pages.welcome', ['fname' => $fname, 'lname' => $lname]);
    }
}
