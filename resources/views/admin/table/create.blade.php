@extends('layout.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Meja</h1>
        <a href="/meja/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Tambah Meja
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Meja</h6>
        </div>
        <div class="card-body">
            <label class="form-label mb-2">Nomor Meja</label>
            <input type="text" class="form-control mb-2" placeholder="Nomor Meja">

            <label class="form-label mb-2">Okupasi</label>
            <input type="text" class="form-control mb-2" placeholder="Okupasi">

            <label class="form-label mb-2">Tipe</label>
            <select class="custom-select mb-2">
                <option selected>Pilih Tipe</option>
                <option value="1">Outdoor</option>
                <option value="2">Indoor</option>
                <option value="3">VIP</option>
            </select>

            <button type="button" class="btn btn-primary">Simpan</button>
        </div>
    </div>
@endsection

