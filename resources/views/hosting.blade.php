@extends('layouts.main')
@section('content')

<div class="container-fluid pt-5">
    <div class="row text-center justify-content-center pt-5">
        <div class="col-md-8">
            <h1>Sistem Pendukung Keputusan Pemilihan Hosting Terbaik</h1>
            <img src="img/hosting.png" alt="hosting" width="800" class="img-fluid pb-3">
            <div class="d-grid gap-2 d-md-block">
            <br><a href="hostingRedirect" target="__blank"> <button class="btn btn-success btn-lg" type="button" >Tampilkan Website</button></a>
            <a href="hostingGit" target="__blank"><button class="btn btn-lg btn-warning" type="button">Tampilkan GitHub</button></a>
            <h3 class="pt-3 text-secondary">September 2021 - Januari 2022</h3>
        </div>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <p style="font-size: 14pt;">&emsp;&emsp;&emsp;Website ini merupakan sistem yang dibuat untuk menuntaskan tugas akhir kuliah. Fungsi website ini adalah memberikan daftar pilihan web hosting yang terbaik dan paling sesuai dengan kebutuhan user tersebut. Terdapat 12 kategori yang menjadi pembanding dalam menentukan pilihan. Metode yang digunakan adalah <i><b>Multi-Objective Optimization by Ratio Analysis (MOORA).</b></i> Website dibangun menggunakan <b>Framework Codeigniter.</b> </p>
            <br>
            <p style="font-size: 14pt;">
                &emsp;&emsp;&emsp;Cara penggunaan website ini adalah dengan menginputkan nilai kepentingan pada setiap kategori. Nilai kepentngan terdiri dari 1 (tidak penting) hingga 5 (sangat penting). Lalu klik tombol <b>Cari</b> maka sistem akan menjalankan proses perhitungan. Setelah selesai akan ditampilkan list <b>web hosting</b> yang diurutkan dari yang terbaik. Untuk proses perhitungan dapat dilihat pada bagian tab <b>Proses</b>. Untuk melakukan pengolahan data / CRUD data Hosting dapat dilakukan pada bagian tab <b>Admin</b>.
            </p>
        </div>
    </div>
</div>
@endsection
     