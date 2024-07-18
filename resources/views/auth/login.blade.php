<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="login-container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            </div>
            @csrf
        <div class="form-group">
            <input type="text" id="username" name="username" placeholder="Username" required>
            @error('username')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" placeholder="Password" required>
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Login</button>
        </div>
   <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
 </form>
</body>
</html>
