@extends('layout.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mt-3 mb-3">
        <h2>Daftar Jadwal Ujian</h2>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Ujian</th>
                <th>Tanggal Ujian</th>
                <th>Jam Mulai</th>
                <th>Nama Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $jadwals as $jadwal )
                <tr>
                    <td>{{ $jadwal->id }}</td>
                    <td>{{ $jadwal->tanggalujian }}</td>
                    <td>{{ $jadwal->jammulai }}</td>
                    <td>{{ $jadwal->namamatakuliah }}</td>
                    <td><a href="{{ route('jadwalujian.edit', $jadwal->id) }}" class="btn btn-warning">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mb-3">
        <a href="{{ route('jadwalujian.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
</div>
@endsection
