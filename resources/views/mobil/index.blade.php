@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">Data Mobil
                        <!-- <button type="button" class="float-right btn btn-secondary btn-floating" data-toggle="modal" data-target="#exampleModalCenterRop"> Count ROP </a> -->
                        @role('admin')
                        <button type="button" class="float-right btn btn-secondary btn-floating" data-toggle="modal" data-target="#exampleModalCenter">Tambah Data</button>
                        @endrole
                    </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="bs4-table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Merek</th>
                                                    <th>Model</th>
                                                    <th>No Plat</th>
                                                    <th>Tarif</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($mobil as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data->merk }}</td>
                                                    <td>{{ $data->model }}</td>
                                                    <td>{{ $data->platno }}</td>
                                                    <td>Rp. {{ number_format($data->tarif) }}</td>
                                                    @if($data->status == 'Tersedia')
                                                    <td><label class="badge badge-success">Tersedia</label></td>
                                                    @else
                                                    <td><label class="badge badge-danger">Tidak Tersedia</label></td>
                                                    @endif
                                                    @role('admin')
                                                    <td>
                                                    <form action="{{ route('mobil.destroy', $data->id) }}"method="POST">
                                                    @csrf @method('delete')
                                                    <button type="button" class="btn btn-warning la la-pencil" data-toggle="modal" data-target="#exampleModalCenterEdit{{$data->id}}"></button>&nbsp;
                                                    <button type="submit" class="btn btn-danger la la-trash" onclick="return confirm('Ingin Menghapus Data?')"></button>
                                                    </form>
                                                    </td>
                                                    @endrole
                                                    @role('user')
                                                    <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pemesananMobil" onclick="setMobilId('{{ $data->merk }}')">PESAN</button>
                                                    </td>
                                                    @endrole

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

<!-- MODAL TAMBAH DATA -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle1">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="zmdi zmdi-close"></span>
                </button>
            </div>
            <form action="{{route('mobil.store')}}" method="post">
                @csrf
            <div class="modal-body">

                <div class="form-group {{ $errors->has('merk') ? ' has-error' : '' }}">
                    <label class="control-label">Merk</label>    
                    <input type="text" name="merk" class="form-control" required>
                    @if ($errors->has('merk'))
                        <span class="help-block">
                            <strong>{{ $errors->first('merk') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('model') ? ' has-error' : '' }}">
                    <label class="control-label">model</label>  
                    <input type="text" name="model" class="form-control" min="1" required>
                    @if ($errors->has('model'))
                        <span class="help-block">
                            <strong>{{ $errors->first('model') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('platno') ? ' has-error' : '' }}">
                    <label class="control-label">platno</label>  
                    <input type="text" name="platno" class="form-control" min="1" required>
                    @if ($errors->has('platno'))
                        <span class="help-block">
                            <strong>{{ $errors->first('platno') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('tarif') ? ' has-error' : '' }}">
                    <label class="control-label">tarif</label>  
                    <input type="number" name="tarif" class="form-control" min="1" required>
                    @if ($errors->has('tarif'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tarif') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                    <label class="control-label">status</label>  
                    <select class="form-control" name="status" id="status">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                    @if ($errors->has('status'))
                        <span class="help-block">
                            <strong>{{ $errors->first('status') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL PEMESANAN -->
<div class="modal fade" id="pemesananMobil" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle1">Pemesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="zmdi zmdi-close"></span>
                </button>
            </div>
            <form action="{{route('pemesanan.store')}}" method="post">
                @csrf
            <div class="modal-body">

                <div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
                    <label class="control-label">Mobil</label>    
                    <input type="text" name="mobil_id" id="mobil_id_input" class="form-control" readonly>
                    @if ($errors->has('mobil_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mobil_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('tanggal_mulai') ? ' has-error' : '' }}">
                    <label class="control-label">tanggal_mulai</label>    
                    <input type="date" name="tanggal_mulai" class="form-control" required>
                    @if ($errors->has('tanggal_mulai'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_mulai') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('tanggal_selesai') ? ' has-error' : '' }}">
                    <label class="control-label">tanggal_selesai</label>  
                    <input type="date" name="tanggal_selesai" class="form-control" min="1" required>
                    @if ($errors->has('tanggal_selesai'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_selesai') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    // Fungsi ini akan dijalankan saat tombol "PESAN" diklik
    function setMobilId(mobilId) {
        $('#mobil_id_input').val(mobilId);
    }
</script>
@endsection
