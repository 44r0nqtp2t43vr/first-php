<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('save') }}"}} method="post">
        {{ csrf_field() }}
        <span>ID number</span>
        <input type="text" name="idno" id="idno">
        <br>
        <span>First name</span>
        <input type="text" name="fname" id="fname">
        <br>
        <span>Mid name</span>
        <input type="text" name="mname" id="mname">
        <br>
        <span>Last name</span>
        <input type="text" name="lname" id="lname">
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
    </form>
</body>
</html>