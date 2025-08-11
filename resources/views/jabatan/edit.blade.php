@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content')
    <h1>Edit Jabatan</h1>

    <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Nama Jabatan:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jabatan" name="nama_jabatan" value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}" required>
                @error('nama_jabatan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jabatan.index') }}" class="btn btn-secondary ms-2">Kembali</a>
            </div>
        </div>
    </form>
@endsection
