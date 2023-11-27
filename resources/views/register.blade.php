<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <style>
        
body, h1, h2, p, ul {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.registration-form {
    display: flex;
    flex-direction: column;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    margin-bottom: 8px;
    color: #555;
}

input {
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #190684;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #3f20ec;
}

p {
    margin-top: 20px;
    text-align: center;
    color: #555;
}

a {
    color: #2408c3;
}

nav {
    background-color: #190684;
    padding: 15px 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

li {
    margin: 0 40px;
}

a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    transition: color 0.3s ease;
}

a:hover {
    color: rgb(255, 233, 31);
}

ul  {
    margin-left: auto;
}

.login-here {
    color: #190684
}
.login-here:hover{
    color: #6b52fd
}






    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Navigation</a></li>
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
    </nav>
    


    <div class="container">
        <form class="registration-form" method="post" action="{{ url('/register') }}">
            @csrf
            <h2>Create an Account</h2>

            
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Register</button>

            <p>Already have an account? <a href="{{ url('/login') }}" class="login-here">Login here</a></p>
        </form>
    </div>



    
</body>
</html>