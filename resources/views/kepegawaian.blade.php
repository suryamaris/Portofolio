@extends('layouts.main')
@section('content')

<div class="container-fluid pt-5">
    <div class="row text-center justify-content-center pt-5">
        <div class="col-md-8">
            <h1>Sistem Informasi Kepegawaian</h1>
            <img src="img/kepegawaian.png" alt="kepegawaian" width="800" class="img-fluid pb-3">
            <div class="d-grid gap-2 d-md-block">
            <br><a href="kepegawaianRedirect" target="__blank"> <button class="btn btn-success btn-lg" type="button" >Tampilkan Website</button></a>
            <a href="kepegawaianGit" target="__blank"><button class="btn btn-lg btn-warning" type="button">Tampilkan GitHub</button></a>
            <h3 class="pt-3 text-secondary">Juni 2021 - Agustus 2021</h3>
        </div>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <p style="font-size: 14pt;">&emsp;&emsp;&emsp;Website ini merupakan pekerjaan <b>Freelance</b> yang diminta oleh seorang mahasiswa. Website ini berfungsi untuk mengolah abasensi pegawai, proses absennsi dari pegawai, pembuatan suran izin / cuti, pengolahan data pegawai, administrasi tindakan perbuahan jabatan pegawai, cetak surat, dan cetak Laporan. Website dibangun menggunakan <b>Framework Codeigniter</b>, pembuatan surat dan pengolahan laporan menggunakan library <b>Mpdf</b></p>
            <br>
            <p style="font-size: 14pt;">
                &emsp;&emsp;&emsp;Pada tampilan awal merupakan tampilan login, disini bisa melakukan pendaftaran dan akan didaftar sebagai pegawai. Untuk akun admin bisa melihat laporan absesnsi, melakukan edit data pegawai, dan banyak fitur lainnya. <br>
                <b>Contoh akun admin : </b>
                <br>email : surya@gmail.com 
                <br>password : 123123
            </p>
        </div>
    </div>
</div>
@endsection
     