<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>make a listing | Book n Cook</title>
</head>
<body style="background-color: black;">
<form method="post" action="{{route('venue.store')}}">
    @csrf
    @method('post')
<div style="text-align: center;color: beige">
    <h1 style="text-align: center">Make a listing</h1>
    <input type="text" name="name" placeholder="name" style="background: none;border-radius: 10px; font-size: x-large;color: beige;padding: 10px;border: beige solid 1px"><br>
    <br>
    <input type="text" name="capacity" placeholder="capacity" style="color: beige;background: none;border-radius: 10px; font-size: x-large;padding: 10px;border: beige solid 1px"><br>
    <br>
    <input type="text" name="price" placeholder="price" style="color: beige;background: none;border-radius: 10px; font-size: x-large;padding: 10px;border: beige solid 1px"><br>
    <br>
    <input type="text" name="description" placeholder="description" style="color: beige;background: none;border-radius: 10px; font-size: x-large;padding: 10px;border: beige solid 1px"><br>
    <br>
    <input style="background-color: beige;color: black;font-size: xx-large;border-radius: 10px" type="submit" value="submit">
</div>
</form>
</body>
</html>
