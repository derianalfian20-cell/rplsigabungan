@extends('layouts.masterlayouts')
@section('title'.'hal produk')
@section('content')
<h1>
    {{ $product['id'] }}<br>
     {{ $product['barang'] }}<br>
      {{ $product['harga'] }}<br>
    
</h1>

@endsection