@extends('themes.cuba.layout')

@section('content')
    <h1>Welcome to the Cuba Theme</h1>
    <form action="{{ route('setTheme') }}" method="POST">
        @csrf
        <label for="theme">Choose Theme</label>
        <select name="theme" id="theme">
            <option value="classic" {{ session('theme') == 'classic' ? 'selected' : '' }}>Classic</option>
            <option value="cuba" {{ session('theme') == 'cuba' ? 'selected' : '' }}>Cuba</option>
        </select>
        <button type="submit">Save</button>
    </form>
@endsection
