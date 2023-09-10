<!-- comics-list.blade.php -->

@extends('layout.comics-list-template')

@section('title', 'Comics list')

@section('content')
    <style>
        body {
            background-image: url("https://img.freepik.com/free-vector/comic-style-wallpaper_79603-1248.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .custom-card {
            height: 100%;
        }
    </style>

    <h1 style="color: white">Comics list</h1>

    <div class="container">
        <div class="row justify-content-center align-items-start">
            @foreach ($comics as $index => $singledata)
                <div class="col-2">
                    <div class="card custom-card">
                        <img class="img-fluid card-img-top" src="{{ $singledata['thumb'] }}" alt="">
                        <div class="card-body">
                            <h4>{{ $singledata['title'] }}</h4>
                            <h6>{{ $singledata['series'] }}</h6>
                            <div>{{ $singledata['price'] }} €</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection
