@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">Data Pesanan Anda
                        <!-- <button type="button" class="float-right btn btn-secondary btn-floating" data-toggle="modal" data-target="#exampleModalCenter">Tambah Data</button> -->
                    </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="bs4-table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Mobil</th>
                                                    <th>Tanggal Mulai</th>
                                                    <th>Tanggak Selesai</th>
                                                    <th>Jumlah Hari</th>
                                                    <th>Total Harga</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($pesan as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data->mobil->merk }}</td>
                                                    <td>{{ date('d F Y', strtotime($data->tanggal_mulai)) }}</td>
                                                    <td>{{ date('d F Y', strtotime($data->tanggal_selesai)) }}</td>
                                                    <td>{{ $data->jumlahhari }}</td>
                                                    <td>{{ $data->totalharga }}</td>
                                                    <td>{{ $data->status }}</td>
                                                    <td>
                                                    <form action="{{ route('pemesanan.destroy', $data->id) }}"method="POST">
                                                    @csrf @method('delete')
                                                    <button type="button" class="btn btn-warning la la-pencil" data-toggle="modal" data-target="#exampleModalCenterEdit{{$data->id}}"></button>
                                                    
                                                    </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection