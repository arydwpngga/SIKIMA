@extends('layouts.app')

@section('title', 'HomePage')

@section('content')
    <h1>Event</h1>

    <!-- Tabel -->
    <div class="container my-4">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Seminar Nasional: CyberTech</h5>
                        <h6 class="card-subtitle mb-2 text-muted">ID: 1</h6>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni magnam id animi quas illum
                            architecto fugit possimus,
                            ullam reprehenderit debitis doloremque, soluta deleniti iure neque. Error autem iste cum!
                            Consequuntur.
                        </p>
                        <p class="card-text">
                            <strong>Tanggal:</strong> 5/11/2024<br>
                            <strong>Waktu:</strong> 10:00 WIB<br>
                            <strong>Lokasi:</strong> Aula Gedung Utama PNL
                        </p>
                        <button class="btn btn-info btn-sm">Info</button>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Coding Camp 2025</h5>
                        <h6 class="card-subtitle mb-2 text-muted">ID: 2</h6>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni magnam id animi quas illum
                            architecto fugit possimus,
                            ullam reprehenderit debitis doloremque, soluta deleniti iure neque. Error autem iste cum!
                            Consequuntur.
                        </p>
                        <p class="card-text">
                            <strong>Tanggal:</strong> 8/11/2024<br>
                            <strong>Waktu:</strong> 10:00 WIB<br>
                            <strong>Lokasi:</strong> Gedung Jurusan TIK
                        </p>
                        <button class="btn btn-info btn-sm">Info</button>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
