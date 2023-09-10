<!DOCTYPE html>
<html lang="en">
@extends('layout.main-template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', 'Home');

    @vite('resources/js/app.js')
    <title>Laravel Comics</title>
    @section('content')

    </head>

    <style>
        body {
            background-image: url("https://img.freepik.com/free-vector/comic-style-wallpaper_79603-1248.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>


    <body>
        <div class="container-img">


        </div>
    </body>

    </html>



@endsection
