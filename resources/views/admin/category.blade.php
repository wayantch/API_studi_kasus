@extends('layout.adminLayout')

@section('content')
    <div class="container mt-3">
        <h1>Daftar Kategori</h1>
        <hr>
        <a href="{{ route('admin.addCategory') }}" class="btn btn-primary">Tambah Kategori</a>
        <hr>
        <table class="table">
            <thead class="thead-light text-center">
                <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
