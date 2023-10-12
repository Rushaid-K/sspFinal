<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Book n Cook</title>
</head>
<body style="background-color: black">
<form method="post" action="{{route('register')}}">
    @csrf
    @method('post')
    <h1 style="color: beige;font-size: xxx-large;text-decoration: underline">Register</h1>
    <input style="background: none;color: beige;border: beige solid 1px;border-radius: 5px;font-size: x-large; padding: 10px; margin: 20px" type="text" name="username" placeholder="username"><br>
    <input style="background: none;color: beige;border: beige solid 1px;border-radius: 5px;font-size: x-large; padding: 10px; margin: 20px" type="text" name="email" placeholder="email"><br>
    <input style="background: none;color: beige;border: beige solid 1px;border-radius: 5px;font-size: x-large; padding: 10px; margin: 20px" type="password" name="password" placeholder="password"><br>
    <input style="background-color: beige;font-size: xx-large;padding: 10px;margin:20px;border-radius: 20px;width: 300px" type="submit" value="register">
</form>
</body>
</html>
