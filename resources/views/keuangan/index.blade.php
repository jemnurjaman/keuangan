@extends('layouts.cms')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Keuangan</h1>
    <p class="mb-4">Riwayat Catatan Keuangan</p>
   
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Semua Data</h6>
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
                                        <tr>
                                            <td>1</td>
                                            <td>100.000</td>
                                            <td>Uang Masuk</td>
                                            <td>Transport</td>
                                            <td>23 Desember 2023</td>
                                            <td>Pembayaran Transport Dinas Luar Tim IT</td>
                                            <td>
                                                <a class="btn btn-success">Edit</a>
                                                <a class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

@section('css')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.booststrap4.min.css') }}" rel="stylesheet">
@endsection

@push('script')
    <script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/datatables/dataTables.demo.min.js') }}"></script>
@endpush