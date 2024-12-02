@extends('layouts.app')

@section('title', 'Events')

@section('content')
    <h1>Event</h1>

    <!-- Tabel -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kegiatan</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data -->
                <tr>
                    <td>1</td>
                    <td>Seminar Nasional : CyberTech</td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni magnam id animi quas illum
                        architecto fugit possimus, ullam reprehenderit debitis doloremque, soluta deleniti iure neque. Error
                        autem iste cum! Consequuntur.</td>
                    <td>5/11/2024</td>
                    <td>10:00 WIB</td>
                    <td>Aula Gedung Utama PNL</td>
                    <td>
                        <button class="btn btn-info btn-sm">Info</button>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Coding Camp 2025</td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni magnam id animi quas illum
                        architecto fugit possimus, ullam reprehenderit debitis doloremque, soluta deleniti iure neque. Error
                        autem iste cum! Consequuntur.</td>
                    <td>8/11/2024</td>
                    <td>10:00 WIB</td>
                    <td>Gedung Jurusan TIK</td>
                    <td>
                        <button class="btn btn-info btn-sm">Info</button>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
