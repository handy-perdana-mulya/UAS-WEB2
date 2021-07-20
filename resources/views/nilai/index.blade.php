@extends('layouts.app')

@section('content')
<style> body {background-color: lavenderblush;} </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Nilai
                    <a href="{{ route('tambah.nilai') }}" class="btn btn-sm btn-primary float-right">Tambah Nilai</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($nilai as $nil)
                          
                           <tr>
                           <td> {{ $nil->id}} </td>
                           <td> {{ $nil->mahasiswa->npm }} </td>
                           <td> {{ $nil->mahasiswa->user->name }} </td>
                           <td> {{ $nil->makul->nama_makul }} </td>
                           <td> {{ $nil->makul->sks }} </td>
                           <td> {{ $nil->nilai }} </td>
                           <td>
                                <a href="{{ route('edit.nilai', $nil->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('hapus.nilai', $nil->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                           </td>
                           </tr>
                           @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
