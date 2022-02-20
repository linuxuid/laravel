@extends('layouts.app')

@section('header')

@endsection

@section('content')
<div class="form">
    <form method="POST" action="/register">
        @csrf
        <ul>
            <li>
              <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
            </li>
            <li>
              <input type="text" name="username" placeholder="username" value="{{ old('username') }}">
            </li>
            <li>
               <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
            </li>
            <li>
                <input type="password" name="password" placeholder="type password again">
            </li>
            <li>
                <input type="submit" name="sub">
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
@endsection

@section('footer')
    
@endsection