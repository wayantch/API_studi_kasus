@extends('layout.adminLayout')

@section('content')
    <div class="container mt-3">
        <h1>Daftar Kategori</h1>
        <hr>
        <a href="" class="btn btn-primary ">Tambah Kategori</a>
        <hr>
        <table class="table">
            <thead class="thead-light text-center">
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tanggal Publikasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($books as $buku)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $buku->title}}</td>
                        <td>{{ $buku->author}}</td>
                        <td>{{ $buku->publication_add}}</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
