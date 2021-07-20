@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Nilai</div>

                    <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="POST">
                    @csrf 

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Nama Mahasiswa</label>
                                <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                    <option value="" disabled selected>--Pilih Nama Mahasiswa--</option>
                                    @foreach ($mahasiswa as $mhs)
                                    <option value="{{ $mhs->id }}" >{{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : ''}} > {{ $mhs->user->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <br>
                         <div class="form-row">
                            <div class="col">
                                <label for="">Nama Mata Kuliah</label>
                                <select name="matkul_id" id="matkul_id" class="form-control">
                                    <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                    @foreach ($makul as $mk)
                                    <option value="{{ $mk->id }}" {{ $nilai->matkul_id == $mk->id ? 'selected' : ''}} > {{ $mk->nama_makul}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <br>
                         <div class="form-row">
                            <div class="col-md-4">
                                <label for="">Nilai</label>
                                <input type="number" name="nilai" class="form-control" placeholder="Tambahkan Nilai" value="{{ is_null
                                ($nilai) ? '' : $nilai->nilai}}">
                            </div>
                        </div> 

                        <div class="form-group">
                        <div class="form-row float-right">
                                <div class="col">
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
