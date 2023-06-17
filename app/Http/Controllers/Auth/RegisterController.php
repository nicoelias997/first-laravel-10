<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller

{
    public function index()
    {
        return view('index');
    }


    public function create(){
        return view('/register');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'min:8'],
        ]);
        
       $user =  User::create($request->all());

       event(new Registered($user));

        return redirect('/login');

    }
}
