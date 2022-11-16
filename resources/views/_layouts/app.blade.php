<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heker Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/hacked-font.css") }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset("assets/css/style.css") }}/>
    
    @yield('style')
</head>

<body>
    {{-- navbar --}}
    <section>
        <nav class="navbar navbar-expand-lg shadow" style="background-color: #3F3B6C;">
            <div class="container">
                <a class="navbar-brand" href="{{ url("/") }}">Heker Indonesia_</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#contact">Beranda</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#contact">Tentang Kami</a>
                          </li>
                        @auth
                          <li>
                            <a class="btn ms-2" href="{{ url('user/register') }}">Daftar Member</a>
                          </li>
                          <li>
                            <form action="{{ url('user/process-logout') }}" method="POST">
                              @csrf
                              <button class="btn btn-danger ms-2" type="submit">Logout</button>
                            </form>
                          </li>
                        @else
                          <li>
                            <a class="btn btn-outline ms-2" href="{{ url('user/login') }}">Login</a>
                          </li>
                        @endauth
                      </ul>
                </div>
            </div>
        </nav>
    </section>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    @yield('script')
</body>

<!-- Footer -->
<footer class="text-center text-lg-start text-white shadow" style="background-color: #9F73AB">
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section id="contact" class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Tentang Kami
            </h6>
            <p>
              Sebuah komunitas heker paling disegani di seluruh dunia dan alam semesta raya.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Not so Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> [REDACTED ADRESS]</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              [REDACTED EMAIL]
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i>[REDACTED PHONE NUMBER]</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4 text-dark shadow" style="background-color: #A3C7D6;">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="{{ url('/') }}">Heker Indonesia</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</html>