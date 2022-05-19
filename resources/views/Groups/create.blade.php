@extends('layouts.app')

@section('title', 'Groups')

    @section('content')
        
    <form action="/groups" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" id="nama" name="name" value="{{ old('nama') }}">
        @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Description</label>
        <input type="text" class="form-control" id="alamat" name="description" value="{{ old('alamat') }}">
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>  
        @enderror
      </div>
     
      <button type="submit" class="btn btn-info">Submit</button>
    </form>
        
@endsection 