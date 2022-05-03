<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Portofolio-Surya</title>
  </head>
  <body id="home">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #021569">
      <div class="container">
        <a class="navbar-brand" href="/">Surya M P Simarmata</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item ">
              <a class="nav-link text-light fw-bold" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fw-bold" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fw-bold" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fw-bold" href="#projects">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fw-bold" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Akhir Navbar -->

    {{-- Isi Konten --}}
    @yield('content')
    {{-- Akhir isi Konten --}}

    <!-- Contact -->
    <section id="contact" style="{{ Request::is('/') ? '' : 'display:none'}}"  >
      <div class="container">
        <div class="row mb-3 text-center">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#021569"
          fill-opacity="1"
          d="M0,128L48,112C96,96,192,64,288,85.3C384,107,480,181,576,181.3C672,181,768,107,864,112C960,117,1056,203,1152,224C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="text-white text-center pb-5">
      <p>Created with <i class="bi bi-stars text-warning"></i> by <a class="text-white fw-bold" href="https://www.instagram.com/surya_maris/">Surya Maris Panensa S</a></p>
    </footer>
    <!-- Akhir Footer -->
  </body>
</html>
