<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 10 Task List App</title>
        @yield('styles')
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="container mx-auto mt-10 mb-10 max-w-lg">
        <h1 class="text-2xl mb-4">@yield('title')</h1>
        <div>
            @if(session()->has('success'))
                <div>{{ session('success') }}</div>
            @endif
        </div>
        <div>
            @yield('content')
        </div>
    </body>
</html>
