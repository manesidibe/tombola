<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="login-container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            </div>
        <div class="form-group">
            <b><span class="required">*</span></b><input type="text" id="username" name="username" placeholder="Username" required>
            @error('username')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <b><span class="required">*</span></b><input type="password" id="password" name="password" placeholder="Password" required>
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <b><span class="required">*</span></b><input type="password" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation" required>
            @error('password_confirmation')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <b><span class="required">*</span> </b><select id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            @error('role')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Register</button>
        </div>
    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
</form>
</body>
</html>
