<!-- resources/views/top.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Welcome, {{ Auth::user()->email }}</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <!-- Add other functionality buttons and links here -->
@endsection