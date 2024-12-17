@extends('layout.app')

@section('content')
<div class="container">
    <h2>Tambah Data Jadwal Ujian</h2>
    <form action="{{ route('jadwalujian.store') }}" method="POST">
        @csrf
        <input type="date" name="tanggalujian" class="form-control mb-3" placeholder="Tanggal Ujian" required>
        <input type="text" name="jammulai" class="form-control mb-3" placeholder="Jam Mulai" required>
        <input type="text" name="namamatakuliah" class="form-control mb-3" placeholder="Nama Mata Kuliah" required>
        <button type="submit" class="form-control mb-3">SIMPAN</button>
    </form>
</div>
@endsection
