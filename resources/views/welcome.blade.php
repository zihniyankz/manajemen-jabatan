@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1 class="mb-4">Dashboard</h1>

    {{-- Ringkasan Data --}}
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Pegawai</h5>
                    <p class="card-text display-6">{{ $totalPegawai }}</p>
                    <a href="{{ route('pegawai.index') }}" class="btn btn-light btn-sm">Lihat Pegawai</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Jabatan</h5>
                    <p class="card-text display-6">{{ $totalJabatan }}</p>
                    <a href="{{ route('jabatan.index') }}" class="btn btn-light btn-sm">Lihat Jabatan</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Pegawai Terbaru --}}
    <div class="card">
        <div class="card-header">
            Pegawai Terbaru
        </div>
        <div class="card-body p-0">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Tanggal Ditambahkan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($latestPegawai as $pegawai)
                        <tr>
                            <td>{{ $pegawai->nama }}</td>
                            <td>{{ $pegawai->email }}</td>
                            <td>{{ $pegawai->jabatan->nama_jabatan ?? '-' }}</td>
                            <td>{{ $pegawai->created_at->format('d-m-Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada data pegawai</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
