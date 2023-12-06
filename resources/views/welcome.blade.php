<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

            header{
                background-color: rgb(0, 0, 0);
                color: white;
                padding: 10px;
                font-family: 'Arial Narrow Bold', sans-serif;
            }
            body{
                background-color: rgb(178, 218, 161);
                display: flex;
                justify-content: center;
                flex-direction: column;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
           table{
            border-collapse: collapse;  
            width: 100%;      
           }
           th, td{
            border: 1px solid black;
            padding: 5px 10px 5px 10px;
            margin: 0px;
            text-align: center;
           }
           .item-controls{
            display: flex;
            flex-direction: row;
            margin: 10px;
            gap: 50px;
           }
           .item-list{
            flex: 2;
           }
           .item-forms{
            display: flex;
            flex: 1;
            background-color: burlywood;
            padding: 10px;
           }
           input{
            width: 80%;
            margin: 10px;
           }
           a{
            text-decoration: none;
            color: black;
           }

        </style>
    </head>
    <body class="antialiased">
        @yield('content')
    </body>
</html>
