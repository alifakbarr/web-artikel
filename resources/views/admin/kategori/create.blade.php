@extends('admin/layouts/layout')
@section('title','Tambah Kategori')
@section('content')
<form action="{{ route('kategori.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Tambah kategori">
  </div>
  @error('nama')
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>     
        @enderror
  <div class="d-flex flex-row-reverse">
    <button type="submit" class="btn btn-sm btn-primary ">Simpan</button>
  </div>
</form>

@endsection