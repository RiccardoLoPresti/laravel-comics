<header>

    <div class="container container-header">

        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
        </div>

        <nav>
            <ul>
                <li>
                    <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">home</a>
                    <a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{route('comics')}}">comics</a>
                    <a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{route('movies')}}">movie</a>
                    <a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{route('tv')}}">tv</a>
                    <a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{route('games')}}">games</a>
                    <a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{route('collectibles')}}">collectibles</a>
                    <a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{route('videos')}}">videos</a>
                    <a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{route('fans')}}">fans</a>
                    <a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{route('news')}}">news</a>
                    <a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{route('shop')}}">shop</a>
                </li>
            </ul>

        </nav>

    </div>

</header>
