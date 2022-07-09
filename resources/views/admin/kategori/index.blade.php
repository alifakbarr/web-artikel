@extends('admin.layouts.layout')
@section('title','Kategori')
@section('content')
<div class="d-flex justify-content-between">
    <h1>Kategori</h1>
    <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary align-self-center">Tambah</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kategori</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @php ($no = 1)
        @foreach ($kategoris as $kategori)            
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $kategori->nama }}</td>
          <td>Otto</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection