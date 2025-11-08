@extends('layouts.layout2')

@section('title', 'About')

@section('content')


  <h3 style="text-align:center">Tentang Kami</h3>

<div class="container my-4">
  <div class="row justify-content-center">
    <!-- Card 1 -->
    <div class="col-md-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('images/images-2.jpg') }}" class="img-fluid rounded-start" alt="Gambar about">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Rian Alfian</h5>
              <p>NIM : 240101060011</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('images/images-4.jpg') }}" class="img-fluid rounded-start" alt="Gambar about">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Syafi'i Maulana</h5>
              <p>NIM : 24010600002</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="/home">← Back to Home</a>
</div>
@endsection
