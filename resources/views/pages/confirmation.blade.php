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

<body id="confirmation">
    @include('templates/header')
    <main>
        <img src="/images/image.png" alt="" width="692" height="481">
        <div class="ucapan">
            <h1>Thank You for Your Interest </h1>
            <strong>Our team will contact you within 5 working days</strong>
        </div>
        <a href="/" class="btn-style">
            <button>Back to homepage</button>
        </a>
    </main>
    @include('templates/footer')
</body>

{{-- 
Menutup definisi section `content`. Semua konten di antara @ section dan @ endsection
akan di-render di tempat @ yield('content') pada file template `main.blade.php`. 
--}}
@endsection