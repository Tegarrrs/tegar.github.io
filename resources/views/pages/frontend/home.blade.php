@extends('layouts.frontend.main')
@section('title', 'UNP Event | Home')

@section('content')
    {{-- jumbotron --}}
    <div class="banner">
        <div class="container text-center">
            <div class="" style="height: 10rem"></div>
            <p class="display-1 fw-bold text-light">Selamat Datang di</p>
            <hr class="border border-light border-3 opacity-75">
            <p class="display-1 fw-bold text-light">Event Kampus UNP</p>
        </div>
    </div>
    {{-- end jumbotron --}}
    <div class="container my-5">

        <div class="container bg-danger shadow ">
            <h1 class="text-center text-light">Event </h1>
        </div>


        <div class="row">
            @if ($event->count())
                @foreach ($event as $events)
                    <div class="col col-12 col-md-6 col-lg-3 mt-4">
                        <div class="card shadow">
                            <img src="{{ asset('storage/' . $events->image) }}" class="card-img-top img-fluid"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $events->nama }}</h5>
                                <div class="card-text text-secondary mt-4"><i class="bi bi-bookmark-fill"></i>
                                    {{ $events->category->nama }}
                                </div>
                                <div class="card-text text-secondary mt-2"><i class="bi bi-calendar"></i>
                                    {{ $events->tanggal_mulai }} - {{ $events->tanggal_akhir }}
                                </div>
                                <div class="card-text text-secondary mt-2"><i class="bi bi-alarm"></i> {{ $events->mulai }}
                                    -
                                    {{ $events->akhir }}
                                </div>
                                <div class="card-text text-secondary mt-2 mb-4"><i class="bi bi-geo-alt-fill"></i>
                                    {{ $events->lokasi }}
                                </div>
                                <a href="{{ route('detail.show', $events) }}" class="btn btn-danger">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Belum ada event.</p>
            @endif
        </div>
    </div>

@endsection
