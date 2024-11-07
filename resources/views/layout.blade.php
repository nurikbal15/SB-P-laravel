<!DOCTYPE html>
<html lang="en">
    <head>

        <title>@stack('title')</title>
        @include('part.head')

    </head>
    <body class="nav-fixed">
        @include('part.navbar')
        <div id="layoutSidenav">
            @include('part.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
            @include('part.footer')
            </div>
        </div>
        @include('part.script')
    </body>
</html>
