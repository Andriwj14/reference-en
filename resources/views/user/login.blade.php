<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Akun</title>
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
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card bg-light border" style="border-radius: 20px; color: #624F82">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                {{-- <img src="assets/images/rm-logo.png" class="img-fluid mb-2" width="100"> --}}
                                <h4 class="login text-center">Login Member</h4>
                            </div>


                            {{-- Alert ketika success dan error --}}
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-warning">
                                    {{ Session::get('error') }}
                                    @php
                                        Session::forget('error');
                                    @endphp
                                </div>
                            @endif

                            <!-- Menampilkan Error form validation -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <b>Terjadi kesalahan pada proses input data</b> <br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ url("user/process-login") }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg" type="button">Login</button>
                                </div>

                                <div class="d-grid gap-2 mt-4 mb-1">
                                    <p class="mb-0">Sudah punya akun?</p>
                                    <a href="{{ url("user/register") }}" class="btn btn-outline-primary">Daftar Member</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
