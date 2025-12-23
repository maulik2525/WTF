<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('register.data') }}" class="login">
    @csrf
    <div class="card">
        <h3>Register</h3>

        <input type="text" name="name" placeholder="Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />

        <button type="submit" class="btn_card">Register</button>

        <p>Already have an account?
            <a href="{{ route('login.page') }}">Login</a>
        </p>
    </div>
</form>

</body>
</html>