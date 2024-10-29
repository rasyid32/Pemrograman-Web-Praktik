<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->email == 'rasyid@gmail.com' && $request->password == '523') {
            echo "Selamat datang";
        } else {
            echo "maaf anda tidak bisa masuk";
        }
    }
}
