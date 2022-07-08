<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login');  
    }

    // make login autentication from models/User.php
    public function pLogin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect('/Tampilan');
        } else {
            return redirect('/login');
        }
    }

    public function keluar()
    {
        Auth::logout();
        return redirect('/login');
    }

}
