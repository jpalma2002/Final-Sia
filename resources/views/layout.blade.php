<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thriftify</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <style>
        .active {
            background-color: rgb(109, 111, 111);
        }

        /* Adjustments for sidebar */
        #main {
            display: flex;
            flex-direction: row;
            
        }

        #sidebar {
            flex: 1;
            background-color: #f0f0f0;
            padding: 20px;
            height: 650px;
           
        }

        #content {
            flex: 3;
            padding: 20px;
        }

        #main-nav {
            list-style: none;
            padding: 0;
        }

        #main-nav a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
        }

        #main-nav a:hover {
            background-color: #ddd;
        }
    </style>

</head>
<body>

    <div id="main">
        <div id="sidebar">
            <div id="title">
                <h1>Thriftify</h1>
            </div>
            <nav id="main-nav">
                <a href="{{ url('/') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/thrifty') }}" class="{{ Request::is('thrifty') ? 'active' : '' }}">Thrifty</a>
                <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
            </nav>
        </div>

        <div id="content">
            @yield('content')
        </div>
    </div>

</body>
</html>
