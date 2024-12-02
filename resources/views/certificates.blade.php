@extends('layouts.app')
@section('title', 'Events')

@section('content')
    <h1>Sertifikat</h1>

    {{-- Tabel --}}
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kegiatan</th>
                    <th>Sertifikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Seminar Nasional : CyberTech</td>
                    <td>
                        <button class="btn btn-primary">Unduh Sertifikat</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
