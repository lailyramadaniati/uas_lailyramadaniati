@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Data Nilai
                <a href="{{route('tambah.nilai') }}" class="btn btn-md btn-primary float-right">Tambah Nilai</a>
                </div>

                <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>NAMA MATA KULIAH</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($nilai as $n)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $n->mahasiswa->npm }}</td>
                                <td>{{ $n->mahasiswa->user->name }}</th>
                                <td>{{ $n->makul->nama_makul }}</td>
                                <td>{{ $n->makul->sks }}</td>
                                <td>{{ $n-> nilai }}</td>
                                <td>
                                    <a href="{{ route('nilai.edit', $n->id) }} " class="btn btn-xs btn-primary">EDIT</a>
                                    <a href="{{ route('nilai.hapus', $n->id) }}" class="btn btn-xs btn-danger">HAPUS</a>
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