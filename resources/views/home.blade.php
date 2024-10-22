{{-- menghubungkan dengan view template master --}}

@extends('master')

{{-- isi judul halaman --}}
{{-- cara penulisn isi section yang pendek --}}

@section('judul_halaman', 'Halaman Home')

{{-- isi konten --}}
{{-- cara penulisan isi section yang panjang --}}

@section('konten')

    <p>ini halaman home</p>
    <p>selamat datang</p>

@endsection