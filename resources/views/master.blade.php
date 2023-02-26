<html>
    <head>
        @yield('meta')
        @vite(['resources/css/style.css'])
    </head>
    <body>
       
            @include('Posts.sidbare')
        <div>
            @yield('content')
        </div>
        @include('Posts.footer')
    </body>
</html>