@extends('layout.app')

@section('content')
<div class="container">
    <h2>Edit Data Jadwal Ujian</h2>
    <form action="{{ route('jadwalujian.update', $jadwal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="date" name="tanggalujian" class="form-control mb-3" value="{{ $jadwal->tanggalujian }}" required>
        <input type="text" name="jammulai" class="form-control mb-3" value="{{ $jadwal->jammulai }}" required>
        <input type="text" name="namamatakuliah" class="form-control mb-3" value="{{ $jadwal->namamatakuliah }}" required>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
</div>
@endsection
