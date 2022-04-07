@extends('dashboard/layouts/layoutMain')

@section('container')
<div class="py-5"></div>
    <div class="container">

            {{-- konten --}}
            <h4>Konten</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal dibuat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $arr)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $arr->title }}</td>
                            <td>{{ $arr->created_at->toDateString() }}</td>
                            <td>{{ $arr->category->name }}</td>
                            <td>
                              <a href="/dashboard/artikel/{{ $arr->slug }}" class="badge bg-info">
                                <span data-feather="trash-2">show</span>
                            </a>
                            <form action="/dashboard/artikel/{{ $arr->slug }}" method="POST" class="d-inline">
                              @method('delete')
                              @csrf
                              <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Kamu yakin?')">
                                <span data-feather="trash-2">Delete</span>
                              </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    <div class="d-flex justify-content-center">
      {{ $artikel->links() }}
    </div>
@endsection