<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ config('app.name', 'test') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

    @yield('styles')

</head>

<body>

    <nav class="navbar-container">

        <div class="nav-item">
            <a href="/">Home</a>
        </div>
        <div class="nav-item">
            <a href="/calendar">Recipe Calendar</a>
        </div>
        <div class="nav-item">
            <a href="/recipes">Recipes</a>
        </div>
        @if (!Auth::check())
            <div class="nav-user-container">
                <form class="nav-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="nav-userid-container">
                        <label for="email" >{{__('E-Mail Address')}}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="nav-password-container">
                        <label for="password">{{__('Password')}}</label>
                        <input type="password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="nav-login-submit-container">
                        <button type="submit">
                            Log In
                        </button>
                    </div>
                    <a href="/register" class="nav-register-link">
                        Don't have an account? Register one here!
                    </a>
                </form>

            </div>
        @else
            <div class="nav-user-container">
                <header class="logout-header">
                    Welcome! You are logged in as:
                </header>
                <header class="username-header">
                    {{ Auth::user()->name }}
                </header>

                <form class="nav-logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </div>
        @endif


    </nav>

    <div class="main-header">
        <div class="header-img-container">
            <img src="{{ asset('images/logo.png') }}">
        </div>
        <header class="header-text">Painfully Mediocre Recipes</header>
    </div>

    @yield('content')

</body>

</html>