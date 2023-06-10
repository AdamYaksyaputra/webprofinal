<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout(); // Menghapus session pengguna

        $request->session()->invalidate(); // Meregenerasi session

        $request->session()->regenerateToken(); // Meregenerasi CSRF token

        return redirect('/'); // Mengarahkan pengguna ke halaman utama atau halaman login
    }
}
