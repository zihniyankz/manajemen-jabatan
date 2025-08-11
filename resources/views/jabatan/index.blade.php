@extends('layouts.app')

@section('title', 'Daftar Pegawai')

@section('content')
    <h1>Daftar Jabatan</h1>

    @if(session('success'))
        <div style="color:green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('jabatan.create') }}">Tambah Jabatan</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jabatans as $jabatan)
                <tr>
                    <td>{{ $jabatan->id }}</td>
                    <td>{{ $jabatan->nama_jabatan }}</td>
                    <td>
                        <a href="{{ route('jabatan.edit', $jabatan->id) }}">Edit</a> |
                        <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus jabatan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data pegawai.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
