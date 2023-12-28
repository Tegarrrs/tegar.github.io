@extends('layouts.frontend.main')
@section('title', 'UNP Event | Detail')

@section('content')
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col col-12 col-lg-8">
                <div class="card shadow">
                    <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->nama }}</h5>
                        <div class="card-text text-secondary mt-4"><i class="bi bi-bookmark-fill"></i>
                            {{ $event->category->nama }}
                        </div>
                        <div class="card-text text-secondary mt-2"><i class="bi bi-calendar"></i>
                            {{ date('d-m-Y', strtotime($event->tanggal_mulai)) }} -
                            {{ date('d-m-Y', strtotime($event->tanggal_akhir)) }}

                        </div>
                        <div class="card-text text-secondary mt-2"><i class="bi bi-alarm"></i> {{ $event->mulai }} -
                            {{ $event->akhir }}
                        </div>
                        <div class="card-text text-secondary mt-2 mb-4"><i class="bi bi-geo-alt-fill"></i>
                            {{ $event->lokasi }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-8 mt-4">
                <div class="card shadow">
                    <div class="card-body">
                        {!! html_entity_decode($event->deskripsi) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
