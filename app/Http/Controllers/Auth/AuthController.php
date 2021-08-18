<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.Login');
    }
    public function login(AuthRequest $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect(route('dashboard.index'));
        } else {
            return redirect(route('login'))->with('status', ' Username dan Password tidak ditemukan');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'))->with('status', 'Logout Berhasil');
    }
}
