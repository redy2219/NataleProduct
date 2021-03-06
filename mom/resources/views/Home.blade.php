<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('Head')
    <body>
        <header>

        </header>
    <main>
        <div class="menu_left">
            menu
        </div>
        @yield('content')
    </main>
    <footer>
        tesFooter
    </footer>
    </body>
</html>
