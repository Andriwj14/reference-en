@extends('_layouts.app')

@section('content')
    <section class="page-content py-5">
        <div class="container" style="border-radius: 20px;">
            <div class="row my-5">
                <div class="col-md-6 mt-md-0 mt-4">
                    <p class="member">Selamat! Kamu telah menjadi bagian dari Fans Real Madrid Indonesia <br>Berikut member card-mu :</p>
                    <div class="card shadow-lg">
                        <div class="card-header d-flex justify-content-start">
                            <p class="mb-0 ms-3 d-flex align-item-center" style="letter-spacing: 1px; font-family: 'Bold'; font-size: 20px">
                                MEMBER CARD
                            </p>
                        </div>
                        <div class="card-body">
                            <h2><b>{{ $user->name }}</b></h2>
                            <p class="text-secondary mb-0">{{ $user->email }}</p>
                            <hr class="text-secondary">
                            <small class="text-seconadry mb-0">Bergabung sejak <b>{{ $user->created_at }}</b></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection