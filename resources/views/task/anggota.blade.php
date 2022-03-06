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
                        <th width="10%">
                            <center>Deadline</center>
                        <th width="10%">
                            <center>Status Task</center>
                        </th>
                        <th width="10%">
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
                                <center><button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                    data-target="#exampleModal2">
                                    Upload
                                </button></center>
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
