<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // import user models
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');   
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'min:3', 'max:255', Rule::unique('users', 'email')],
            'password' => 'required|max:18|min:7'
        ]);

       $user = User::create($attributes);

        // log the use in
        auth()->login($user);

        // session flash message
        session()->flash('success', 'Your account has been created');

        return redirect('/home');
    }
}
