@extends('layouts.app')

@section('title', 'Groups')

    @section('content')
        
    <form action="/groups/{{ $group['id'] }}" method="POST">
      @csrf
      @method('put')
      <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" id="nama" name="name" value="{{ old('name') ? old('name') : $group['name'] }}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Description</label>
        <input type="text" class="form-control" id="alamat" name="description" value="{{ old('description') ? old('description') : $group['description'] }}">
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
     
      <button type="submit" class="btn btn-info">Submit</button>
    </form>
        
@endsection 