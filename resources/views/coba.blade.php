@extends('template')
@section('main')
    <h1>Ini view laravel saya</h1>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Perulangan menggunakan blade</h1>
        @endif
    @endfor

    @php

    @endphp

    <img src="{{ asset('img/photo-152.jpeg') }}" alt="" width="250px">
@endsection
