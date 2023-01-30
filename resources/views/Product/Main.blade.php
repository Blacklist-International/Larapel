@extends('Layout/Main')

@section('title')
Daftar Toko | Poin Plus
@endsection

@section('content')
<h3 align="center">Daftar Toko Poin Plus</h3>

<table class="table table-success table-striped">
    <tr>
        <th>ID</th>
        <th>Nama Toko</th>
        <th>Alamat Toko</th>
        <th>Aksi</th>
    </tr>
    @foreach($stores as $store)
    <tr>
        <td>{{ $store->id_toko }}</td>
        <td>{{ $store->nm_toko }}</td>
        <td>{{ $store->almt_toko }}</td>
        <td>
            <a href="" title="Edit"><i class=" bi bi-pencil"></i></a>
            |
            <a href="" title="Delete"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
    @endforeach
</table>
<a href="" class="btn btn-primary">Tambah Data Toko</a>
@endsection