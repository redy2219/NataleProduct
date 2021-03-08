<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('Head')
    <body>
        <header>
Natale
        </header>
    <main class="wrapper">
        @yield('content')
    </main>
    <footer>
      @Natale
    </footer>
    </body>
</html>
