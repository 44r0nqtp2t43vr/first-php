<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #welcome {
            margin: 0-auto;
            text-align: center;
            color: grey;
            text-shadow: 5px 5px 5px black;
            font-size: 6rem;
        }
    </style>
</head>
<body>
    <span id="welcome">Welcome to the storefront Application</span>
    <br>
    <a href="{{ route('about') }}">See our History</a>
</body>
</html>