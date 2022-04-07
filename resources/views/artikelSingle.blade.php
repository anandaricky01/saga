@extends('layouts/layoutMain')

@section('container')
    
<!-- konten isi -->
    <section class="konten">
      <div class="container">
          <div class="row">
              <div class="col">
                <div class="header justify-content-center">
                    <div class="kategori justify-content-center">
                        <p class="text-center kategori">{{ $artikel->category->name }}</p>
                    </div>
                    <h3 class="display-4  text-center" style="font-weight: 400;">{{ $artikel->title }}</h3>
                    <div class="gambar">
                        <img src="https://source.unsplash.com/random/1280x720" class="img-fluid" alt="gambar-artikel">
                    </div>
                </div>
                <div class="isi">
                    <p class="sumber">Sumber</p>
                    <p class="tanggal">{{ $artikel->created_at->diffForHumans() }}</p>
                    <p style="text-align: justify; line-height: 30px;">
                        {!! $artikel->body !!}
                    </p>
                      <p>Terima Kasih sudah Membaca</p>
                      <p>Yuk, bagikan artikel dengan klik tombol di bawah ini</p>
                      <div class="bagikan d-flex">
                        <p>Bagikan: </p>
                        <button class="icon text-center shadow"><a href="#"><i class="fab fa-twitter"></i></a></button>
                        <button class="icon text-center shadow"><a href="https://www.instagram.com/sagavokasiub"><i class="fab fa-instagram"></i></a></button>
                      </div>
                    <!-- <div class="unduh">
                        <a class="btn text-white" href="#" tabindex="-1" aria-disabled="true">Download Sekarang<i class="fas fa-download icon"></i></a>
                    </div> -->
                </div>
              </div>
          </div>
      </div>
    </section>
      <!-- akhir konten isi -->

      <!-- artikel lain -->
      @if ($artikelLain->count() > 0)
        <!-- artikel lain -->
        <section class="artikel-lain">
          <div class="container">
            <div class="row d-flex justify-content-evenly">
                @foreach ($artikelLain as $art)
                <button class="col-lg-3 col-md-3 col-sm-12 col-11 mt-sm-4 mt-4 bg-white shadow ms-lg-2 ms-md-1 ms-sm-1 card">
                    <a href="/artikel/{{ $art->slug }}" class="content-card">
                        <img src="https://source.unsplash.com/random/500x300" class="img-fluid" alt="">
                        <div class="d-flex justify-content-between align-items-center">
                        <p class="tanggal">{{ $art->created_at->diffForHumans() }}</p>
                        <span href="/artikel?kategori={{ $art->category->slug }}" style="border-radius: 4px; background-color: #B7F4F1; padding: 0 10px;height: max-content; width: max-content;">{{ $art->category->name }}</span>
                        </div>
                        <h3>{{ $art->title }}</h3>
                    </a>
                </button>
                @endforeach
            </div>
          </div>
        </section>
        <!-- akhir artikel lain -->
      @endif
      <div class="container mt-4">
        <h2 class="mb-5 text-center">Laravel Social Share Buttons Example</h2>
        {!! $shareComponent !!}
    </div>
@endsection