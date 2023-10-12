<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home | Cook n Book</title>
</head>
<body style="background-color: black">
<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 60%;
        margin: auto;
    }
</style>
<nav style="  background-color: black;height: 50px;line-height: 50px;text-align: center;">
    <a href="http://127.0.0.1:8000/" style="color: white;text-decoration: none;padding: 0 10px;color: deeppink;font-style: italic">Home</a>
    <a href="{{route('venue.create')}}" style="color: white;text-decoration: none;padding: 0 10px;color: deeppink;font-style: italic">Register</a>
    <a href="http://127.0.0.1:8000/venue/create" style="color: white;text-decoration: none;padding: 0 10px;color: deeppink;font-style: italic">make a listing</a>
    <a href="http://127.0.0.1:8000/venue/create" style="color: white;text-decoration: none;padding: 0 10px;color: deeppink;font-style: italic">admin</a>
</nav>
<img src="https://www.eventsource.ca/blog/wp-content/uploads/2017/04/NGStudioHeader-1.jpg" style="width: 100%">
<div style="">
    <br>
    <h1 style="color: beige;text-decoration: underline">Welcome to Cook n Book</h1>
    <p style="color: beige;font-size: large">Welcome to Cook n Book. We are a kickstarter business that specializes in setting up venues and catering services for that next big event!.</p>
    <br>
    <h1 style="color: beige;font-size: large;text-align: center;text-decoration: underline">Check out our venues and catering services !</h1>
    <br><br>
        <table style="border: beige solid 1px; font-size: x-large;width: 70%;margin-left: auto;margin-right: auto">
            <tr>
                <td style="border: beige solid 1px;text-align: center;color: beige;padding: 10px;">Venue name</td>
                <td style="border: beige solid 1px;text-align: center;color: beige;padding: 10px">Capacity</td>
                <td style="border: beige solid 1px;text-align: center;color: beige;padding: 10px">price</td>
                <td style="border: beige solid 1px;text-align: center;color: beige;padding: 10px">description</td>
             </tr>
    @foreach($venues as $venue)
            <tr>
                <td style="border: beige solid 1px;color: beige">{{$venue->name}}</td>
                <td style="border: beige solid 1px;color: beige">{{$venue->capacity}}</td>
                <td style="border: beige solid 1px;color: beige">{{$venue->price}} LKR</td>
                <td style="border: beige solid 1px;color: beige ">{{$venue->description}}</td>
            </tr>
    @endforeach
        </table>
    <br>
</div>
</body>
</html>
