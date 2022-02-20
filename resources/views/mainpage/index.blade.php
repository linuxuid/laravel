@extends('layouts.app')

@section('content')

@if (session()->has('success'))
    <div class="session">
        <p>{{ session('success') }}</p>
    </div>
@endif


@endsection