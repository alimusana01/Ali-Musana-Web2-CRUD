@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Makul</div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Kode Makul </label>
                                <input type="text" name="kd_makul" class="form-control" placeholder="Tambah Kode Makul">
                            </div>

                            <div class="col">
                                <label for="">Nama Matakuliah </label>
                                <input type="text" name="nama_makul" class="form-control" placeholder="Tambah Nama Matakuliah">
                            </div>

                            <div class="col">
                                <label for="">SKS </label>
                                <input type="number" name="nama_makul" class="form-control" placeholder="Tambah SKS">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row float-right" >
                            <div class="col">
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="{{route('makul')}}" class="btn btn-md btn-danger">BATAL</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
