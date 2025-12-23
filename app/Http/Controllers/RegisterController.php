<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
class RegisterController extends Controller
{
      function register(){
      return view('register');
    }
      public function store(Request $request)
    {
        $register = new Register();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = bcrypt($request->password); 
        $register->save(); 

        return redirect()->route('home');
    }
}
