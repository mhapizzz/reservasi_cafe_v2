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
            <h6 class="m-0 font-weight-bold text-primary">Data Meja</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th>Nomor Meja</th>
                                        <th>Okupasi</th>
                                        <th>Tipe</th>
                                        <th style="width: 250px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tables as $table)
                                        <tr>
                                            <td>{{ $table->nomor_meja }}</td>
                                            <td>{{ $table->okupasi }}</td>
                                            <td>{{ $table->tipe }}</td>
                                            <td>
                                                <a href="{{ route('admin.table.edit', $table->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin.table.destroy', $table->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                    class="btn btn-danger">Delete</a>
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
@endsection
