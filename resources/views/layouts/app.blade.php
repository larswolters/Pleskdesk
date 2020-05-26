<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-900">
<div id="app">
    <div class="w-full bg-gray-800">
        <div class="px-4 md:px-0 container mx-auto">
            <div class="flex items-center justify-between">
                <!-- Left side of navigation -->
                <div class="py-4">
                    <h1 class="text-xs font-semibold text-gray-500 tracking-wider uppercase">
                        Bit Pleskdesk.
                    </h1>
                </div>
                <!-- Right side of navigation -->
                <div class="py-4">
                    @guest
                        <a class="button" href="{{ route('logout') }}">
                            Sign in
                        </a>
                    @else
                        <a class="button" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        <div class="w-full">
            <div class="container mx-auto">
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>
