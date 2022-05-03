@extends('layouts.main')
@section('content')

<div class="container-fluid pt-5">
    <div class="row text-center justify-content-center pt-5">
        <div class="col-md-8">
            <h1>Movie API</h1>
            <img src="img/movieAPI.png" alt="movieAPI" width="800" class="img-fluid pb-3">
            <div class="d-grid gap-2 d-md-block">
            <br><a href="bloggerRedirect" target="__blank"> <button class="btn btn-success btn-lg" type="button" >Tampilkan Website</button></a>
            <a href="bloggerGit" target="__blank"><button class="btn btn-lg btn-warning" type="button">Tampilkan GitHub</button></a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <p style="font-size: 14pt;">&emsp;&emsp;&emsp;Ini merupkan projek untuk mempelejarai bagaimana sistem Rest API bekerja. Pembelajaran ini disediakan oleh sebuah channel youtube yang bernama Web Programming Unpas. Pada website ini yang ditampilkan adalah bagaimana mengakses sebuah Rest API yang sudah tersedia yaitu API dari OMDB. API ini memungkinkan seseorang untuk mengakses data dari film-film yang ada pada server OMDB tersebut. Tidak hanya mengakses rest API yang telah tersedia, dari pembelajaran yang diberikan juga mempelajari bagaimana mengakses API menggunakan API key, membuat sebuah REST Server dan REST Client lalu menghubungkannya. </p>
            <br>
            <p style="font-size: 14pt;">
                &emsp;&emsp;&emsp;Penggunaan website ini sangat simple, yaitu dengan mengetikan judul film yang ingin dicari lalu tekan Enter atau klik tombol search. Lalu akan muncul film yang sesuai dengan judul yang diinputkan. Kita bisa melihat detail yang ada pada film yang ditampilkan tersebut. 
            </p>
        </div>
    </div>
</div>
@endsection
     