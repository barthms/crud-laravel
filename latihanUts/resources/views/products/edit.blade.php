@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<body>
    <h1>Edit Produk</h1>
    
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <label for="name">Nama Produk:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        <br>
        
        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description" required>{{ $product->description }}</textarea>
        <br>
        
        <label for="image">Gambar Produk:</label>
        <input type="file" id="image" name="image">
        <br>
        @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" width="100">
        @endif
        <br>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
    
    <a href="{{ route('products.index') }}">Kembali ke Daftar Produk</a>
</body>
    @endsection
    