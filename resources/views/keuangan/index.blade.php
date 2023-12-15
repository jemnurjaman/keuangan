@extends('layouts.cms')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Keuangan</h1>
<p class="mb-4">Riwayat Catatan Keuangan</p>
@include('keuangan.alert')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="d-inline-block m-0 font-weight-bold text-primary">Semua Data</h6>

        <a href="{{ route('keuangan.create') }}" class="btn btn-primary float-right">Tambah Data</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Jumlah</th>
                        <th>Jenis</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($keuangan as $index => $data)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>Rp {{ number_format($data->jumlah) }}</td>
                            <td>
                                @if($data->jenis)
                                    <span class="badge badge-danger">Uang Keluar</span>
                                @else
                                    <span class="badge badge-success">Uang Masuk</span>
                                @endif
                            </td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->tanggal }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>
                                <a href="{{ route('keuangan.edit', $data) }}" class="btn btn-success">Edit</a>

                                <form class="d-inline" method="POST"
                                    action="{{ route('keuangan.destroy', $data) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin menghapus data ini?');">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@push('script')
    <script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('sbadmin/js/demo/datatables-demo.js') }}"></script>
@endpush
