@extends('layouts.layout2')

@section('title', 'Blog Home')

@section('content')
<div class="container mt-5">

    <!-- Hero Section -->
    <div class="p-5 mb-4 bg-light rounded-3" style="background-image: url('{{ asset('images/images-1.jpg') }}'); background-size: cover; background-position: center; color: white; box-shadow: 0 4px 20px rgba(0,0,0,0.4);">
        <div class="container py-5 text-center">
            <h1 class="display-4 fw-bold text-shadow">Selamat Datang di Blog Kami</h1>
            <p class="fs-5 mb-4 text-shadow">Berbagi cerita, ide, dan inspirasi setiap hari.</p>
        </div>
    </div>

<!-- Sedikit CSS tambahan untuk efek teks -->
<style>
.text-shadow {
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
}
</style>
@endsection
