@extends('layouts.app')
@section('title', 'Tambah Produk')
@section('content')
    <body>
        <h1>Tambah Produk</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Nama Produk :</label>
            <input type="text" name="name"><br>
            <label>Deskripsi :</label>
            <textarea type="text" name="description"></textarea><br>
            <label>Gambar :</label>
            <input type="file" name="image" enctype="multipart/form-data"><br>
            <button type="submit">Simpan</button>
        </form>
        <a href="{{ route('products.index') }}">Kembali</a>
    </body>
@endsection
</html>