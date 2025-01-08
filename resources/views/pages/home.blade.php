{{-- 
Menggunakan fitur Blade Laravel untuk mewarisi template dari file `main.blade.php`. 
Template `main` ini biasanya berada di folder `resources/views`. 
--}}
@extends('main')

@section('title')

<title>HELIOS</title>

@endsection
{{-- 
Mendefinisikan sebuah section bernama `content`.
Bagian ini akan menggantikan @ yield('content') yang ada di template `main`. 
--}}
@section('content')

{{-- isi konten --}}

<body id="home">
    @include('templates/header')
    @include('pages/components/hero')
    @include('pages/components/form')
    @include('pages/components/advantages')
    @include('pages/components/feature')
    @include('pages/components/value')
    @include('pages/components/cust')
    @include('pages/components/explore')
    @include('templates/footer')
</body>

{{-- 
Menutup definisi section `content`. Semua konten di antara @ section dan @ endsection
akan di-render di tempat @ yield('content') pada file template `main.blade.php`. 
--}}
@endsection