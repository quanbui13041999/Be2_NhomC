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
}
