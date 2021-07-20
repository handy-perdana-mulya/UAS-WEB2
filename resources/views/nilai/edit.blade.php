@extends('layouts.app')

@section('content')
<style> body {background-color: lavenderblush;} </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Nilai</div>

                <div class="card-body">
                     <form action="{{route('update.nilai', $nilai->id) }}" method="post">
                      @csrf
                      <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <div style="width: 600px"
                                <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                         <option value="" disabled selected>--Pilih User--</option>
                                        @foreach ($mahasiswa as $mhs)
                                            <option value="{{ $mhs->id }}" {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : ''}}>{{ $mhs->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                            <div style="width: 600px">
                                   <label for="">Nama Matakuliah</label>
                                    <select name="makul_id" id="makul_id" class="form-control">
                                         <option value="" disabled selected>--Pilih Nama Makul--</option>
                                        @foreach ($makul as $mk)
                                        <option value="{{ $mk->id }}" {{ $nilai->makul_id == $mk->id ? 'selected' : ''}}>{{ $mk->nama_makul}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                            <div style="width: 600px">
                                   <label for="">Nilai</label>
                                   <input type="number" name="nilai" class="form-control" placeholder="Masukkan Nilai">
                                </div>
                            </div>
                            </div>
                            </div>
                         <div class="form-group">
                                <div class="form-row float-left">
                                    <div class="col">
                                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                        <a href="{{route('nilai')}}" class="btn btn-md btn-danger">BATAL</a>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
