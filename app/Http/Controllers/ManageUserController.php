<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageUserController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password', 'user_type');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/'); // Redirect to dashboard upon successful login
        }

        // Authentication failed
        return back()->withInput($request->only('username', 'user_type'))
            ->withErrors(['Invalid credentials. Please try again.']);
    }
}
