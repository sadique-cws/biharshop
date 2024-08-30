<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){
        if($req->isMethod("post")){
            $req->validate([
                'email' =>'required|email',
                'password' => 'required|min:8'
            ]);

            $credentials = $req->only('email', 'password');

            if(Auth::attempt($credentials)){
                return redirect()->route('homepage')->with('success', 'Login successful');
            }
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
        return view("login");
    }
    public function register(Request $req){

        if($req->isMethod("post")){
            $req->validate([
                'name' =>'required|max:255',
                'email' =>'required|email|unique:users',
                'password' => 'required|min:8',
                'contact' => 'required'
            ]);

            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password =  $req->password;
            $user->contact = $req->contact;
            $user->save();
            return redirect()->route('login')->with('success', 'Registration successful');
        }
        return view("register");
    }   

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successful');
    }
}
