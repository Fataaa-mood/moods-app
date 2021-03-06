<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Moods</title>

    <!-- Scripts -->
    <script src="{{secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/login.css') }}" rel="stylesheet">
    <link href="{{asset('css/characters.css') }}" rel="stylesheet">
    <link href="{{asset('css/intro.css')}}" rel="stylesheet">
    <link href="{{asset('css/groups.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/waiting.css')}}" rel="stylesheet"/>
    <link href="{{ asset('css/characters.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/mission.css') }}" rel="stylesheet" />
</head>


<body>
    <div id="app">
        <div class="app-content mt-1">
            <nav class="navbar navbar-expand-md navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- <a class="navbar-brand text-white ml-3" href="{{ url('/') }}">Moods</a> -->
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item text-white">
                                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                                </li>
                            @endif
    
                            @if (Route::has('register'))
                                <li class="nav-item text-white">
                                    <a class="nav-link text-white" href="{{ route('register') }}">Sign Up</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="section-groups">
            @yield('groups')
    </div>
    <div class="section-waiting">
            @yield('waiting')
    </div>
    <div class="section-character">
            @yield('characters')
    </div>
    <div class="section-mission">
            @yield('mission1')
    </div>
    <div class="section-mission">
            @yield('mission2')
    </div>
    <div class="section-mission">
            @yield('mission3')
    </div>
    <div class="section-mission">
            @yield('mission4')
    </div>
    <div class="section-mission">
            @yield('mission5')
    </div>
    <div class="section-mission">
            @yield('missionImp')
    </div>

    <script src="{{asset('js/mission.js')}}"></script>
    <script src="{{asset('js/missionImp.js')}}"></script>
</body>
</html>







