<nav id="navbar" class="navbar navbar-expand d-flex">
    <a class="navbar-brand" href="@if(Auth::check()) {{ route('home') }} @else {{ route('landing') }} @endif" translate="no">
        <img class="rounded logo" src="/svg/dish.svg" alt="Logo" data-toggle="tooltip" data-placement="bottom" title="{{ config('app.name') }}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">@flang('pages.about', true)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">@flang('pages.contact', true)</a>
            </li>
        </ul>
        <div class="buttons ml-auto d-flex align-items-center">
            @auth
            <notification-reader></notification-reader>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userOptions" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="userOptions">
                    <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-link">@lang('auth.logout')</button>
                    </form>
                </div>
            </div>
            @endauth
            @guest
            <a href="{{ route('login') }}" class="btn btn-link">@lang('auth.login')</a>
            <a href="{{ route('register') }}" class="btn btn-primary">@lang('auth.signup')</a>
            @endguest
        </div>
    </div>
</nav>
