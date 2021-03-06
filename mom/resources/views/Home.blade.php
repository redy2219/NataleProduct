<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('Head')
    <body>
        <header>
Natale
        </header>
    <main class="wrapper">
        <div class="menu_left">
            menu
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>
      @Natale
    </footer>
    </body>
</html>
