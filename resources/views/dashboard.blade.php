<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
      
             
body, h1, h2, p, ul {
    margin: 0;
    padding: 0;
}

body{
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
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

#h1-welcome{
    text-align: center;
    margin-top: 5rem;
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

<div id="h1-welcome">
<h1>Welcome to Dashboard</h1>
</div>

</body>
</html>