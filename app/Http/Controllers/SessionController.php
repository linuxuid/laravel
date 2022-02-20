<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/home')->with('success', 'goodbye!');
    }

    public function store(Request $request)
    {
        //validate the request
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt to authentificate and log in the user
        // base on the provides credentials
        if(auth()->attempt($attributes)) {
            // redirect with a success flash message
            return redirect('/home')->with('success', 'welcome back');
        }

        // auth failed
       throw ValidationException::withMessages([
        'email' => 'Your provided credentails could not be verified'
       ]);
    }
}
