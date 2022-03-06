@extends('adminlte::page')

@section('title', 'Task Project')

@section('content_header')
    <h1>Management Task</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="card">
        <div class="card-header" style="background-color: #17a2b8;color: #ffffff;">
            <h3 class="card-title"><b>Informasi</b></h3>
        </div>
        <div class="card-body">
            <input type="hidden" value="" name="" id="" />
            <input type="hidden" value="" name="" id="" />
            <dl class="row col-sm-8">
                <dt class="col-sm-2">Nama Project </dt>
                <dd class="col-sm-10" id="nama_project">: Company Profile</dd>
                <dt class="col-sm-2">Client </dt>
                <dd class="col-sm-10" id="nama_klien">: Klien 1</dd>
                <dt class="col-sm-2">Deadline </dt>
                <dd class="col-sm-10" id="waktu_berakhir">: 2022-02-27</dd>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Task <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="demo-hor-inputemail">Penerima Task</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="penerima_task" id="id_user">
                                        <option value="0">-- Pilih Penerima --</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Deadline <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" placeholder="Deadline" name="Deadline" value="" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Task<span class="text-danger">*</span></label>
                                 <textarea class="form-control" type="text-area" placeholder="Deskripsi Task" name="deskripsi_task" value="" /></textarea>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-sm-2 col-form-label">File </label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Isi <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea
                                        id="summernote">Place <em>some</em> <u>text</u> <strong>here</strong></textarea>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Tambah Task</button>
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
                            <center>Task</center>
                        </th>
                        <th width="15%">
                            <center>Penerima Task</center>
                        </th>
                        <th width="15%">
                            <center>Deadline</center>
                        <th width="15%">
                            <center>Status Task</center>
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
                            <center>Design UI</center>
                        </td>
                        <td>
                            <center>Helena Putri</center>
                        </td>
                        <td>
                            <center>2022-02-27</center>
                        </td>
                        <td>
                            <center><a class="btn btn-sm btn-success" target="_blank" href="">Proses</a>
                            </center>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                    data-target="#exampleModal1">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                    data-target="#exampleModal2">
                                    Lihat
                                </button>
                                <form method="POST" action="" style="display: inline-block;">
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus Data?')">Delete</button>
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
