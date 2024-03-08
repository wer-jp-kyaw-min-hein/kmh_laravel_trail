<!-- resources/view/login.blade.php -->
@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <button type="submit">Login</button>
    </form>
@endsection