<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageUserController extends Controller
{
    // redirect to register user
    public function create() {
        return view('ManageUser.Register');
    }
    public function createNewUser(Request $request) {
        $input = $request->all();
        User::create($input);

        return redirect('ManageUser.Login');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('ManageUser.Login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password', 'user_role');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/'); // Redirect to dashboard upon successful login
        }

        // Authentication failed
        return back()->withInput($request->only('username', 'user_role'))
            ->withErrors(['Invalid credentials. Please try again.']);
    }
}
