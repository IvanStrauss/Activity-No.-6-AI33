<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Add your authentication logic here
        // For simplicity, let's assume the user is authenticated successfully

        return redirect('/dashboard');
    }
}

