<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return request()->all(); //apapun requestnya akan dikirim
        $validatedData = $request->validate([
            'name' => 'required|max:255', //untuk memvalidasi form
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users', //dns agar domainnya harus bener
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']); //untuk enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please login'); //flash messeage dari laravel

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
