<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup()
  {
    return view('Auth.signup');

  }
    public function login(Request $request)
  {
auth()->attempt($request->only('email','password'));
    return redirect('/');

  }
    public function loginpage()
  {
    return view('Auth.login');

  }
    public function store(Request $request)
  {
    // dd($request('email','password')->only);
      $this->validate($request,[
          'name' => "required",
          'username' => "required",
          'email' => "required|email",
          'password' => "required|confirmed",
      ]);
      User::create([
          'name' =>$request->name,
          'username'=>$request->username,
          'email'=>$request->email,
          'password'=>Hash::make($request->password),
      ]);
      auth()->attempt($request->only('email','password'));
    return redirect('/');

  }
  public function logout()
  {
    auth()->logout();
    return redirect('/');
  
  }
}
