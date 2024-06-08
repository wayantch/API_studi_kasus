@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">About</h1>
            <p class="lead">Di halaman ini, kami akan membahas tentang macam-macam buku.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Novel</h5>
                        <p class="card-text">Novel adalah sebuah karya sastra prosa yang biasanya berisi cerita fiksi yang panjang. Biasanya, novel terdiri dari beberapa bab atau bagian yang membentuk alur cerita yang utuh.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Komik</h5>
                        <p class="card-text">Komik adalah sebuah bentuk media yang menggabungkan ilustrasi dan teks. Biasanya, komik digunakan untuk menceritakan cerita secara visual dengan menggunakan panel-panel gambar dan balon teks untuk dialog.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ensiklopedia</h5>
                        <p class="card-text">Ensiklopedia adalah sebuah buku yang berisi informasi dan pengetahuan tentang berbagai topik. Ensiklopedia biasanya disusun secara alfabetis dan memberikan penjelasan mendetail tentang subjek yang dijelaskan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection