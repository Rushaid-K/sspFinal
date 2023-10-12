<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .dashboard {
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
        }

        .dashboard-header {
            background-color: #333;
            padding: 20px;
        }

        .dashboard-header h1 {
            color: white;
            font-size: 24px;
            margin: 0;
        }

        .dashboard-nav {
            background-color: #eee;
            padding: 20px;
        }

        .dashboard-nav ul {
            list-style: none;
            padding: 0;
        }

        .dashboard-nav li {
            display: inline-block;
            margin-right: 20px;
        }

        .dashboard-nav a {
            color: black;
            text-decoration: none;
        }

        .dashboard-main {
            padding: 20px;
        }

        .dashboard-main h2 {
            font-size: 20px;
            margin: 0;
        }

        .dashboard-main p {
            margin: 0;
        }
    </style>
</head>
<body>
<div class="dashboard">
    <div class="dashboard-header">
        <h1>Admin Dashboard</h1>
    </div>

    <div class="dashboard-nav">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="dashboard-main">
        <h2>Welcome to the admin dashboard!</h2>
        <p>This is where you can manage your website's users, settings, and more.</p>
    </div>
</div>
</body>
</html>
