@extends('layouts.main')
@section('content')

<div class="container-fluid pt-5">
    <div class="row text-center justify-content-center pt-5">
        <div class="col-md-8">
            <h1>Blogger Website Laravel</h1>
            <img src="img/blogger.png" alt="blogger" width="800" class="img-fluid pb-3">
            <div class="d-grid gap-2 d-md-block">
            <br><a href="bloggerRedirect" target="__blank"> <button class="btn btn-success btn-lg" type="button" >Tampilkan Website</button></a>
            <a href="bloggerGit" target="__blank"><button class="btn btn-lg btn-warning" type="button">Tampilkan GitHub</button></a>
            <h3 class="pt-3 text-secondary">April 2022 - April 2022</h3>
       </div>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <p style="font-size: 14pt;">&emsp;&emsp;&emsp;Website hasil belajar dari sebuah channel youtube yang bernama Web Programming Unpas. Website ini dibangun menggunakan <b>Framework Laravel</b>. Ini merupakan blog website yang menampilkan postingan dalam bentuk blog. Fitur yang terdapat dalam web ini yaitu pada bagian <b>Front-End</b> berisi dari tampilan Blog yang sudah diposting, fitur search postingan, dan pembagian blog menurut kategori. Bagian <b>Bakc-End</b> terdapat fitur login dan registrasi, menu author, CRUD postingan, dan lainnya.</p>
            <br>
        </div>
    </div>
</div>
@endsection
     