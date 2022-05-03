@extends('layouts.main')
@section('content')
    <!-- Jumbotron -->
    <section class="jumbotron text-center" id="top">
      <img src="img/foto.jpeg" alt="Surya" width="200px" class="rounded-circle img-thumbnail" />
      <h3 class="pt-3">Hai, Saya</h3>
      <h1 class="display-4">Surya Maris Panensa Simarmata</h1>
      <p class="lead">Sedang menekuni Website developer berfokus pada Back-End Developer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L48,138.7C96,149,192,171,288,154.7C384,139,480,85,576,101.3C672,117,768,203,864,234.7C960,267,1056,245,1152,208C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center mb-3">
          <div class="col-md-8">
            <p>Halo, perkenalkan saya <b>Surya</b>, asal Pekanbaru. Saat ini saya merupakan fresh graduate lulusan dari Universitas Sumatera Utara jurusan Ilmu Komputer. Saya mulai belajar <b>website developer</b> mulai dari awal kuliah, namun fokus belajar mulai dari tahun 2021. Hingga sekarang saya masih terus belajar untuk meningkatkan wawasan dan skill saya terutama pada bidang <b>Back-End Developer</b>. Saya sedang mencari kesempatan untuk bisa bekerja sebagai <b> Website Developer maupun Back-End Developer.</b></p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#8ad8f7"
          fill-opacity="1"
          d="M0,32L48,53.3C96,75,192,117,288,117.3C384,117,480,75,576,69.3C672,64,768,96,864,106.7C960,117,1056,107,1152,101.3C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    {{-- Skills --}}

    <section id="skills">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col"><h2>My Skills</h2></div>
        </div>
        <div class="row justify-content-center ">
          <div class="col-sm-2 mb-3 text-center">
            <p  class="fs-3"style="color: rgb(255, 115, 0)">HTML</p>
            <img src="img/html.png"  class="img-fluid" width="100" >
          </div>
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(4, 4, 190)">CSS</p>
            <img src="img/css.png"  class="img-fluid" width="100" >
          </div>
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(30, 19, 71)">PHP</p>
            <img src="img/php.svg"  class="img-fluid" width="100" >
          </div>
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(4, 4, 95)" class="mb-4">SQL</p>
            <img src="img/sql.png"  class="img-fluid" width="100" height="100">
          </div>
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(207, 2, 2)">Laravel</p>
            <img src="img/laravel.png"  class="img-fluid" width="100" >
          </div>
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(255, 134, 53)">Codeigniter</p>
            <img src="img/codeigniter.png"  class="img-fluid" width="100" >
          </div>
        </div>
        <div class="row justify-content-center ">
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(11, 59, 163)">Rest API</p>
            <img src="img/rest.png"  class="img-fluid" width="100" >
          </div>
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(4, 4, 190)">C++</p>
            <img src="img/cplus.png"  class="img-fluid" width="100" alt="c++ logo image">
          </div>
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(77, 85, 109)">C#</p>
            <img src="img/csharp.png"  class="img-fluid" width="100" >
          </div>
          <div class="col-sm-2 mb-3 text-center">
            <p class="fs-3" style="color: rgb(250, 172, 3)" class="mb-3">Data Report</p>
            <img src="img/report.png"  class="img-fluid" width="100">
          </div>          
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L48,106.7C96,117,192,139,288,138.7C384,139,480,117,576,138.7C672,160,768,224,864,245.3C960,267,1056,245,1152,213.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    {{-- Akhir Skills --}}

    <!-- Project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col"><h2>My Projects</h2></div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="pic">
                <img src="img/movieAPI.png" class="card-img-top" alt="movieAPI" />
                <div class="overlay"></div>
                <div class="button"><a href="movieAPI" >Lihat Selengkapnya </a></div>
              </div>
              <div class="card-body">
                <h4 class="card-text"><b>Movie API</b></h4>
                <p>Website untuk belajar sistem REST API dari Web Programming Unpas. Website ini menampilkan data film yang diambil memnggunakan API dari omdb </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="pic">
                <img src="img/blogger.png" class="card-img-top" alt="blogger" />
                <div class="overlay"></div>
                <div class="button"><a href="blogger">Lihat Selengkapnya </a></div>
              </div>
              <div class="card-body">
                <h4 class="card-text"><b>Blogger Website</b></h4>
                <p class="card-text">Belajar membuat website menggunakan Laravel dari Web Programming Unpas. Website ini  menjalankan dan menampilkan sistem manajemen sebuah blog website menggunakan framework Laravel </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="pic">
                <img src="img/kepegawaian.png" class="card-img-top" alt="kepegawaian" />
                <div class="overlay"></div>
                <div class="button"><a href="kepegawaian">Lihat Selengkapnya </a></div>
              </div>
              <div class="card-body">
                <h4 class="card-text"><b>Sistem Informasi Kepegawaian</b></h4>
                <p class="card-text">Website yang berfungsi sebagai sistem informasi pada sebuah perusahaan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="pic">
                <img src="img/hosting.png" class="card-img-top" alt="hosting" />
                <div class="overlay"></div>
                <div class="button"><a href="hosting">Lihat Selengkapnya </a></div>
              </div>
              <div class="card-body">
                <h4 class="card-text"><b>SPK Hosting</b></h4>
                <p class="card-text">Website sistem pendukung keputusan pemilihan web hosting terbaik</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="pic">
                <img src="img/kas.png" class="card-img-top" alt="kas" />
                <div class="overlay"></div>
                <div class="button"><a href="kas">Lihat Selengkapnya </a></div>
              </div>
              <div class="card-body">
                <h4 class="card-text"><b>Kas Klinik</b></h4>
                <p class="card-text">Aplikasi desktop pengolahan kas dan laporan kas sebuah klinik</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <p class="text-center"><a target="_blank" href="https://icons8.com/icon/UFF3hmipmJ2V/sql">Icon by Icons8</a></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#8ad8f7"
          fill-opacity="1"
          d="M0,96L48,106.7C96,117,192,139,288,138.7C384,139,480,117,576,138.7C672,160,768,224,864,245.3C960,267,1056,245,1152,213.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akkhir Project -->

    @endsection

 
