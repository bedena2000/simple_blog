<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('register');
    }

    public function store(Request $request) {
        $username = $request->input('username');
        $email = $request->input('userEmail');
        $password = $request->input('password');
        $repeatedPassword = $request->input('repeatPassword');

        // Validate input
        $request->validate([
            'username' => 'required|string|max:255',
            'userEmail' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'repeatPassword' => 'required|string|same:password'
        ], [
            'userEmail.required' => 'The email field is required.',
            'userEmail.email' => 'The email must be a valid email address.',
            'userEmail.max' => 'The email must not exceed 255 characters.',
            'userEmail.unique' => 'The email has already been taken.',
            'username.required' => 'The username field is required',
            'username.max' => 'The username must not exceed 250 characters',
            'password.required' => 'The password field is required',
            'password.min' => 'The password must be at least 8 characters.',
            'repeatPassword.confirmed' => 'The password confirmation does not match' 
        ]);

        // Hash the password
        $hashedPassword = Hash::make($password);

        // Create and save the user
        $user = new User();
        $user->name = $username;
        $user->email = $email;
        $user->password = $hashedPassword;

        $user->save();

        return redirect()->route('loginPage')->with('success', 'Registration successful! You can now log in.');


       

       

    }
}
