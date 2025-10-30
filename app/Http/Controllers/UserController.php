<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('Register');
    }

    public function registered(Request $request)
    {

        $credential = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            "password" => "required|string|min:8|confirmed"
        ]);

        // register in db

        $user = User::create([
            'name' => $credential['name'],
            'email' => $credential['email'],
            'password' => $credential['password']
        ]);

        if (!empty($user)) {
            return redirect()->route('login')
                ->with(['status' => 'success', 'message' => "user created succesfully now login to go on dashboard"]);
        }
        return redirect()->back()
            ->with(['status' => 'error', 'message' => "something went wrong"]);
    }

    // login function will be here

    public function login()
    {
        return view('Login');
    }

    public function login_user(Request $request)
    {

        $credential = $request->validate([
            'email' => 'required|email|max:255',
            "password" => "required|string|min:8"
        ]);

        if (Auth::attempt($credential)) {

            $request->session()->regenerate();

            return redirect()->route('dashboard')->with(['status' => 'success', 'message' => "login successful"]);
        } else {
            return redirect()->back()->with(['status' => 'error', 'message' => "invalid credentials"]);
        }
    }

    // dashboard function will be here

    // login function will be here

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard')->with('user', Auth::user());
        } else {
            return redirect()->route('login')
                ->with(['status' => 'error', 'message' => "please login to access dashboard"]);
        }
    }

    // logout function will be here

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login')
        ->with(['status' => 'success', 'message' => "logged out successfully"]);
}


}
