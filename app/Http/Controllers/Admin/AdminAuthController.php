<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('Admin/Auth/Login');
    }

    public function login(Request $request)
    {
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isAdmin' => 1])) {
        return redirect()->route('admin.dashboard'); //redirect to the admin dashboard
    }

        return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    }
}
