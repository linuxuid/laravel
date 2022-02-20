<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <title>App name - @yield('title', 'default')</title>
</head>
<body>
    @section('header')
        <header>
            <nav class="menu">
                <a href="#">Home</a>
            @auth
                <div class="logout">
                    <form method="POST" action="/logout">
                        @csrf
                        <button>
                            Log Out
                        </button>
                    </form>
                </div>
            @else
                <a href="/register">register</a>
                <a href="/login">login</a>
            @endauth
                <a href="#">contacts</a>
            </nav>
        </header>
    @show   
    
    @section('content')
        <main>

        </main>        
    @show
    
    @section('footer')
        <footer>
            <div class="footer_text">
                <p>Author: Funshine</p>
                <p><a href="mailto:funshine@example.com">funshine@example.com</a></p>
            </div>
        </footer>
    @show
</body>
</html>