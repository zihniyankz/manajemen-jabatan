@extends('layouts.app')

@section('title', 'Daftar Pegawai')

@section('content')
    <h1>Daftar Pegawai</h1>

    @if(session('success'))
        <div style="color:green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('pegawai.create') }}">Tambah Pegawai Baru</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pegawais as $index => $pegawai)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->email }}</td>
                    <td>{{ $pegawai->jabatan->nama_jabatan ?? '-' }}</td>
                    <td>
                        <a href="{{ route('pegawai.edit', $pegawai->id) }}">Edit</a> |
                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin hapus pegawai ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:none; border:none; color:red; cursor:pointer; padding:0;">Hapus</button>
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
