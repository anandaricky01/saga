@extends('dashboard/layouts/layoutMain')

@section('container')
<article>

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $artikel->title }}</h2>
                <a href="/dashboard/artikel">
                    <button class="btn btn-primary my-3">
                        <span data-feather="arrow-left"></span> Back to Post
                    </button>
                </a>
                <img src="/img/artikel1/artikel-{{ $artikel->id }}.jpg" class="img-fluid mb-4" alt="{{ $artikel->slug }}">
                {{ $artikel->created_at->toDateString() }}
                {!! $artikel->body !!}
                {{-- 
                    tag di atas akan menghilangkan efek HTMLSpecialChars
                    dan dapat mengeksekusi tag HTML.

                    namun, gunakan secara hati - hati supaya tidak terjasi XSS
                    (cross site script)
                --}}
                
            </div>
        </div>
    </div>

    
</article>
@endsection