@extends('layout.adminLayout')

@section('content')
    <div class="container mt-3">
        <h1>Tambah Kategori</h1>
        <form action="{{ route('admin.admin.addCategory') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kategori">Nama Kategori:</label>
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan Nama Kategori">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Add Kategori</button>
            <a href="{{ route('admin.category') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection