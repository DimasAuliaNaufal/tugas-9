@extends('layouts.app')

@section('jumbotron', 'Detail friend')

@section('content')
    <div class="row">
        <div class="card card-profile mt-4">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                        
                    <div class="card" style="width: 18rem;">
                         <div class="card-body">
                         <h5 class="mb-0">{{ $friend->nama }} </h5>
                        <h6 class="text-info">{{ $friend->no_telp }}</h6>
                        <p class="mb-0">{{ $friend->alamat }}</p>
                         </div>
                    </div>

                        @if($group != 0)
                        <p><a href="../group/{{ $group->id }}">group Yang Dimasuki : {{ $group->nama_group }}</a></p>
                        @else
                        <p class="fw-bold">Tidak Masuk Ke Grup Apapun</p>
                        @endif
                        @if($data == 0)
                        <p class="fw-bolder">Belum Pernah bergabung Dalam Grup</p>
                        @else
                        <p>Pernah Masuk Kedalam Grup : </p>
                        <ul>
                            @foreach ($data as $item)
                                <li>{{ $item->nama_group }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <a href="{{ url('friend') }}/{{ $friend->id }}/edit" class="btn btn-secondary">Edit</a>
                        <form action="/friend/{{ $friend->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah yakin ingin menghapus data {{ $friend->nama }}?')" class="btn btn-light">Hapus</button>
                        </form>
                    </div>
                </div>

            @endsection


            