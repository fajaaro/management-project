@extends('adminlte::page')

@section('title', 'Tim Project')

@section('content_header')
    <h1>Tim Project</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="card">
        <div class="card-header" style="background-color: #17a2b8;color: #ffffff;">
            <h3 class="card-title"><b>Data Project</b></h3>
        </div>
        <div class="card-body">
            <input type="hidden" value="" name="" id="" />
            <input type="hidden" value="" name="" id="" />
            <dl class="row col-sm-8">
                <dt class="col-sm-2">Nama Project </dt>
                <dd class="col-sm-10" id="nama_project">: {{$proyek->nama_project}}</dd>
                <dt class="col-sm-2">Client </dt>
                <dd class="col-sm-10" id="nama_klien">: {{$proyek->klien->nama_perusahaan}}</dd>
                <dt class="col-sm-2">Deadline </dt>
                <dd class="col-sm-10" id="waktu_berakhir">: {{$proyek->waktuberakhir}}</dd>
                {{-- <dt class="col-sm-2">Tingkat </dt>
                <dd class="col-sm-10" id="tingkat"></dd>
                <dt class="col-sm-2">Kelas </dt>
                <dd class="col-sm-10" id="kelas"></dd> --}}
            </dl>
        </div>
    </div>
    <div class="card card-default">
        <div class="card-body table-responsive">
         <div class="form-group mr-1">
            {{-- <a class="btn btn-primary" href="manPengumuman.create">Tambah</a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah
            </button>
        </div>

        <!-- Modal Create -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tim</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="demo-hor-inputemail">Nama</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="nama_user" id="id_user">
                                        <option value="0">-- Pilih Tim --</option>
                                        </select>
                                    </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-body">
                     <form action="" method="POST" enctype="multipart/form-data">
                         <div class="form-group row">
                             <label class="col-sm-2 control-label" for="demo-hor-inputemail">Jabatan</label>
                                 <div class="col-sm-10">
                                     <select class="form-control" name="jabatan" id="id_level_akun_user">
                                     <option value="0">-- Pilih Jabatan --</option>
                                     </select>
                                 </div>
                         </div>
                     </form>
                 </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Tambah Tim</button>
                    </div>
                </div>
            </div>
        </div>
            <table class="table table-bordered table-striped table-hover mb-0" id="example1">
                <thead>
                    <tr>
                        <th width="5%">
                            <center>No</center>
                        </th>
                        <th width="15%">
                            <center>Nama</center>
                        </th>
                        <th width="15%">
                            <center>Jabatan</center>
                        </th>
                        <th width="15%">
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <center>1</center>
                        </td>
                        <td>
                            <center>Helena Putri</center>
                        </td>
                        <td>
                            <center>Project Manager</center>
                        </td>
                        <td>
                           <center>
                              <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                    data-target="#exampleModal1">
                                    Edit</button>
                              <form method="POST" action="" style="display: inline-block;">
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus Data?')">Hapus</button>
                           </center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

        $('#example1').DataTable({
            "responsive": true,
        });
    </script>
@stop
