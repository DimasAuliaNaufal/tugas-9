@extends('layouts.app')

@section('jumbotron', 'Detail Group')
@section('content')
    <div class="row">
        <div class="card card-profile mt-4">
            <div class="row">
                
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                        <h4 class="mb-0">{{ $group->name_groups }} </h4>
                        <p class="mt-2 mb-2">{{ $group->deskripsi }}</p>
                       
                        

                        
                    
                    </div>

                    <!-- Tambah friend group -->
                    <a href="/group/{{ $group->id }}/add" class="btn btn-primary" style="width: 100%">Tambah friend</a>

                    {{-- Edit group --}}
                    <a href="/group/{{ $group->id }}/edit" class="btn btn-warning " style="width: 100%">Edit group</a>

                    {{-- Hapus Gruo --}}
                    <form action="/group/{{ $group->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                            onclick="return confirm('Apakah yakin ingin menghapus data {{ $group->nama_group }}?')"
                            class="btn btn-danger" style="width: 100%">Hapus group</button>
                    </form>
                </div>
            </div>

        @endsection