@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Kategori Surat >> {{ isset($kategori) ? 'Edit' : 'Tambah' }}</h2>
    <p>Tambahkan atau edit data kategori. Jika sudah selesai, jangan lupa untuk mengklik tombol "Simpan"</p>

    {{-- Pesan error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($kategori) ? route('kategori.update', $kategori->id) : route('kategori.store') }}" method="POST">
        @csrf
        @if(isset($kategori))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label>ID (Auto Increment)</label>
            <input type="text" class="form-control" value="{{ $kategori->id ?? 'Auto' }}" disabled>
        </div>

        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control"
                value="{{ old('nama_kategori', $kategori->nama_kategori ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label>Judul</label>
            <textarea name="judul" class="form-control" rows="3">{{ old('judul', $kategori->judul ?? '') }}</textarea>
        </div>

        <a href="{{ route('kategori.index') }}" class="btn btn-secondary"><< Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
