<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psy\ManualUpdater\Checker;

class AuthController extends Controller
{
    // Hiển thị form đăng nhập
    public function showLoginFormr() {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('login');
    }
    // xu ly dang nhap
    public function login(Request $request) {
       $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/');
        }

    }
}
