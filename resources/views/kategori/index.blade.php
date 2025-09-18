@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Kategori Surat</h2>
    <div class="mb-3">
        <span class="text-muted">Berikut adalah daftar kategori bisa digunakan.</span> <br>
        <span class="text-muted">Klik "Tambah" pada button dibawah tabel untuk menambahkan kategori baru.</span>
    </div>

    <!-- Form search -->
    <form action="{{ route('kategori.index') }}" method="GET" class="d-flex mb-3">
        <input type="text" name="search" class="form-control me-2" 
               placeholder="Cari kategori..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-secondary">Cari</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kategori as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada kategori</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Tombol tambah kategori di bawah tabel -->
    <div class="mt-3">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">+ Tambah Kategori</a>
    </div>
</div>
@endsection
