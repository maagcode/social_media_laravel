<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|unique:users|email|max:255',
            'username'  => 'required|unique:users|alpha_dash|max:30',
            'password'  => 'required|min:8'
        ]);

        User::create([
            'email'    => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('social.home')->with('info', 'Account successfully created');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $reqquest)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
    }
}
