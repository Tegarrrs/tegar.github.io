@extends('layouts.admin.main')

@section('content')
    <div class="container-fluid rounded bg-white p-3">
        <div class="mb-2 ">
            <a class="btn btn-dark" href="{{ route('admin/event.index') }}"><i class="bi bi-arrow-left"></i></a>
        </div>
        <form class="w-75 mt-3" method="POST" action="{{ route('admin/event.update', $event) }}" autocomplete="off"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3 w-50">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $event->nama }}"
                    autofocus>
            </div>
            <div class="mb-3 w-50">
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select" id="inputGroupSelect01" name="category_id">
                    <option value="">Pilih Kategori</option>
                    @foreach ($category as $categories)
                        <option value="{{ $categories->id }}">{{ $categories->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 w-50">
                <label for="tanggal_mulai" class="form-label">Tanggal Awal</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                    value="{{ $event->tanggal_mulai }}">
            </div>
            <div class="mb-3 w-50">
                <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
                    value="{{ $event->tanggal_akhir }}">
            </div>
            <div class="mb-3 w-50">
                <label for="mulai" class="form-label">Jam Mulai</label>
                <input type="time" class="form-control" id="mulai" name="mulai" value="{{ $event->mulai }}">
            </div>
            <div class="mb-3 w-50">
                <label for="akhir" class="form-label">Jam Berakhir</label>
                <input type="time" class="form-control" id="akhir" name="akhir" value="{{ $event->akhir }}">
            </div>
            <div class="mb-3 w-50">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $event->lokasi }}">
            </div>
            <div class="mb-3 w-50">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" placeholder="Masukan Deskripsi" name="deskripsi"
                    value="{{ $event->deskripsi }}"></textarea>

            </div>
            <div class="mb-3 w-50">
                <label for="image" class="form-label">Gambar Event</label>
                <input type="hidden" name="oldImage" value="{{ $event->image }}">
                @if ($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" class="img-preview img-fluid mb-3 col-sm-2">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-2">
                @endif
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <script>
        function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
