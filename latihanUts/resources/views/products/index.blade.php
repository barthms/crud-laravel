@extends('layouts.app')
@section('title', 'Data Produk')
@section('content')

<body>
    <h1>Data Produk</h1>
    <a href="{{ route('products.create') }}">Tambahkan Produk</a>
    <div class="container ">
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td><img src="{{ asset('storage/' . $product->image)}}" width="100"></td>
                <td>
                    <a href="{{ route('products.edit', $product->id)}}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
@endsection