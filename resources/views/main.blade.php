<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Mendeklarasikan karakter encoding sebagai UTF-8 untuk mendukung berbagai karakter internasional --}}
    <meta charset="UTF-8">
    {{-- Mengatur viewport agar halaman bersifat responsif dan tampil dengan baik di perangkat mobile --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Import Google Fonts --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    {{-- Import Font Awesome --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    {{-- Import custom css --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Import JQuery --}}
    <script src="js/jquery-3.7.1.min.js"></script>
    {{-- Import Main Js --}}
    <script src="js/main.js"></script>

    <link rel="shortcut icon" href="/images/logo-ico.ico" type="image/x-icon">

    @yield('title')
</head>

{{-- 
Tempat untuk me-render konten dinamis dengan Blade, yang didefinisikan menggunakan @ section('content')
Konten ini akan menggantikan @ yield('content') jika ada file Blade yang meng-extend template ini 
--}}

@yield('content')

</html>