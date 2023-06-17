<?php

namespace App\Http\Controllers;

use App\Mail\SendSignedNotifications;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class Notifications extends Controller
{
    public function index()
    {
        return view('notifications');
    }
    public function sendEmail(): RedirectResponse
    {
        // $user = User::findOrFail($request->$this->auth()->user);
 
        // Ship the order...
        Mail::to('nicolasgaliam@gmail.com')->send(new SendSignedNotifications());
 
        return redirect('/notifications');
    }
}
