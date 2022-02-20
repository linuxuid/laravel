@extends('layouts.app')

@section('header')
    
@endsection

@section('content')

    <div class="login_header">
        <h2>Log In</h2>
    </div>    

<div class="form">
    <form method="POST" action="/login">
        @csrf
        <ul>
            <li>
               <input type="email" name="email" placeholder="email">
            </li>
            <li>
                <input type="password" name="password" placeholder="password">
            </li>
            <li>
                <input type="submit" value="Log In" name="sub">
            </li>
           </ul>

           {{-- errors --}}
           @if ($errors->any())
               @foreach ($errors->all() as $error)
               <div class="display_errors">
                  <p> {{ $error }} </p>
              </div>
               @endforeach
           @endif
    </form>
</div>

@section('footer')
    
@endsection