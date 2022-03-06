@extends('adminlte::page')

@section('title', 'Tambah Kegiatan')

@section('content_header')
    <h1>Tambah Kegiatan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <form action="{{ route('desaingrafis.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> Nama Desain grafis <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                        </div>
                        <div class="form-group">
                            <label>Jenis kelamin <span class="text-danger">*</span></label>
                            <select class="form-control" name="category" />
                            @foreach ($Jenis_kelamin as $category)
                                @if ($category == old('category'))
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No telp<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                        </div>
                        <div class="form-group">
                            <label>Gmail <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                            <a class="btn btn-danger" href="{{ route('desaingrafis.index') }}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
