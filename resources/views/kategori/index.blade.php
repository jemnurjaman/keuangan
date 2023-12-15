@extends('layouts.cms')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
    <p class="mb-4">Pilihan Kategori Keuangan</p>
@include('kategori.alert')
   
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Semua Data</h6>

                            <a href="{{ route('kategori.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                             
                                    <tbody>
                                        @foreach ($kategori as $index => $data)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>
                                                <a href="{{ route('kategori.edit', $data) }}" class="btn btn-success">Edit</a>
                                                
                                                <form class="d-inline" method="POST"
                                                    action="{{ route('kategori.destroy', $data) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                </form>

                                                <button type="submit" class="btn btn-danger" onclick="return confirm(Yakin menghapus data ini ?);">Hapus</button>
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
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.booststrap4.min.css') }}" rel="stylesheet">
@endsection

@push('script')
    <script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/datatables/dataTables.demo.min.js') }}"></script>
@endpush