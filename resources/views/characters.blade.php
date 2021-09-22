@extends('layouts.app');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/characters.css') }}" rel="stylesheet" />
    <title>Laravel8</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->






</head>

<body class="containerCharacters">

    <div class="who-are-you container ">
        <img class="ch0" src="{{ asset('images/character0.jpg') }} " />
        <h2>Who are you?</h2>
        
    </div>
    
    <div>
        <img class="ch0" src="{{asset($character["image"])}}"/>
        <p>Eres: {{$character["name"]}}</p>
        @csrf
        @if ($user->impostor === 1)
            <p>eres el impostor</p>
        @endif
    </div>
    <a href="{{route('map')}}">next</a>
    <script src="{{asset('js/characteres.js')}}"></script>
</body>

</html>
