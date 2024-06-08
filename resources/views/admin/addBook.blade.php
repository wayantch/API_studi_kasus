@extends('layout.adminLayout')

@section('content')
    <div class="container">
        <h1>Tambah Buku</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Buku">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan Nama Penulis">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Publikasi:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar Buku:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <select class="form-control" id="kategori" name="kategori">
                    <option value="1">Nama Kategori 1</option>
                    <option value="2">Nama Kategori 2</option>
                    <option value="3">Nama Kategori 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
        </form>
    </div>
@endsection