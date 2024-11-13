<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Theme</title>
    <link rel="stylesheet" href="{{ asset('css/classic/style.css') }}">
</head>
<body>
<nav class="navbar">
    <a href="{{ route('home') }}" class="nav-link">Home</a>
    <a href="{{ route('contacts') }}" class="nav-link">Contacts</a>
</nav>

@yield('content')
</body>
</html>
