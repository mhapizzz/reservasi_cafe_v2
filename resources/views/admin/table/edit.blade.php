@extends('layout.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Meja</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Meja</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.table.update', $table->id) }}" method="post">
                @csrf
                @method('PUT')
                <label class="form-label mb-2">Nomor Meja</label>
                <input type="text" class="form-control mb-2" placeholder="Nomor Meja" name="nomor_meja" value="{{ $table->nomor_meja }}">

                <label class="form-label mb-2">Okupasi</label>
                <input type="text" class="form-control mb-2" placeholder="Okupasi" name="okupasi" value="{{ $table->okupasi }}">

                <label class="form-label mb-2">Tipe</label>
                <select class="custom-select mb-2" name="tipe" value="{{ $table->tipe }}">
                    <option selected>Pilih Tipe</option>
                    <option value="outdoor" {{ $table->tipe == 'outdoor' ? 'selected' : '' }}>Outdoor</option>
                    <option value="indoor" {{ $table->tipe == 'indoor' ? 'selected' : '' }}>Indoor</option>
                    <option value="vip" {{ $table->tipe == 'vip' ? 'selected' : '' }}>VIP</option>
                </select>

                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
@endsection
