<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('Head')
    <body>
        <header>
Natale
        </header>
    <main class="wrapper">
        <div class="menu_left">
            <div class="for_photo">
                <img src="{{asset('/image/siamskij_kot_kot_morda_125499_320x480.jpg')}}" alt="avatar"/>
            </div>
            <div class="for_link">
                <a href="{{url('Product')}}">Заказы</a>
                <a href="{{url('Art')}}">Мои картины</a>
                <a href="{{url('Art')}}">Настройки</a>
            </div>
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
