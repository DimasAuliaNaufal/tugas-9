@extends('layouts.app')

@section('title', 'Groups')

    @section('content')
        
    <form action="/groups/addmember/{{$group->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nama" class="form-label">Nama teman</label>
        <select class="form-select" aria-label="Default select example"name="friend_id">
          <option selected>pilih teman untuk di masukan ke groups/option>
          @foreach($friend as $f)
              <option value="{{$f->id}}">{{$f->nama}}</option>
          @endforeach
        </select>
      </div>
     
      <button type="submit" class="btn btn-info">tambah ke group</button>
    </form>
        
@endsection 