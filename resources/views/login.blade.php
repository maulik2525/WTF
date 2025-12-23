<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        .login{
            
        }
    </style>
</head>
<body>
<form method="POST" action="{{ route('login.data') }}" class="login">
    @csrf
    <div class="card">
        <h3>Login</h3>

        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />

        <button type="submit" class="btn_card">Login</button>

        <p>Don’t have an account?
            <a href="{{ route('register.page') }}">Register</a>
        </p>
    </div>
</form>

</body>
</html>