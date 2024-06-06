<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <span style="color:deepskyblue"><i class="fa-solid fa-signs-post"></i>POST</span>
        <ul >
            <li><a href="#">USER</a></li>
            <li><a href="#">POST</a></li>
        </ul>
        <button class="btn btn-info btn-lg">Read More</button>
    </nav>
    <div>
        @yield('content')
    </div>
    <footer class="bg-light">
        <p>Made with 💙 by Mona Saleh</p>
    </footer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js">
</body>
</html>