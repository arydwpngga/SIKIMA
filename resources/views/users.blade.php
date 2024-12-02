@extends('layouts.app')
@section('title', 'Users')

@section('content')
    <h1>User</h1>

    {{-- table --}}
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2023573010132</td>
                    <td>Arya</td>
                    <td>arya@gmail.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2021573010031</td>
                    <td>Andi</td>
                    <td>andi@gmail.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection