<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        // validation
        $this->validate($request,[
            'name'=> 'required|max:255',
            'email'=> 'required|max:255',
            'password'=> 'required',
        ]);

        User:: create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);

        //sign in
        auth()->attempt($request->only('email','password'));
        return redirect()->route('dashboard');

    }
}

