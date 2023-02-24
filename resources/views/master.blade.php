<html>
    <head>
        @yield('meta')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>
       
            @include('Posts.sidbare')
        <div>
            @yield('content')
        </div>
        @include('Posts.footer')
    </body>
</html>