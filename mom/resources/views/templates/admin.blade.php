@extends('Home')
@section('content')
<div class="menu_left flex_d">
    <div class="for_photo">
        <img src="{{asset('/image/kat.jpg')}}" alt="avatar"/>
    </div>
    <div class="flex_d for_link">
        <a href="{{url('Product')}}">Заказы</a>
        <a href="{{url('Art')}}">Мои картины</a>
        <a href="{{url('Art')}}">Настройки</a>
    </div>
</div>
<div class="content_admin">

</div>
@endsection
