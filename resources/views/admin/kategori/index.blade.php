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
          <td>
            <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $kategori->id }}">
              Delete
            </button>
            
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>



  {{-- modal --}}
  @foreach ($kategoris as $kategori)    
  <div class="modal fade" id="delete{{ $kategori->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white fw-bold" id="exampleModalLabel">Hapus Ciri</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus ciri : {{ $kategori->nama }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="{{ route('kategori.destroy', $kategori) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary" onclick="return true">Hapus</button>
          </form>
        </div>
      </div>
      {{-- <a href="{{ route('item.delete',$item->id) }}" class="btn btn-primary ">Hapus</a> --}}
    </div>
  </div>
@endforeach
@endsection