<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function show(): View
    {
        return view('auth.register');
    }

    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
           'firstname' => 'required|string',
           'lastname' => 'required|string',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:8|max:15|confirmed'
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
