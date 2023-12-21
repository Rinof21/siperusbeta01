@extends('Layouts.app')
@section('title', 'Tampil Ruangan')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tampil Ruangan</h1>
        <ol class="breadcrumb mb-4">
        </ol>
        <div class="card mb-4">
            <div class="card-body">
            @if($errors->any())
                {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
                @endif
                @if(Session::get('error') && Session::get('error') != null)
                <div style="color:red">{{ Session::get('error') }}</div>
                @php
                Session::put('error', null)
                @endphp
                @endif
                @if(Session::get('success') && Session::get('success') != null)
                <div style="color:green">{{ Session::get('success') }}</div>
                @php
                Session::put('success', null)
                @endphp
                @endif
                <form action="{{ route('ruangan.update', $ruangan->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <img src="{{ asset('gambar/ruangan/'. $ruangan->foto_ruangan) }}" width=auto height="400"  alt="gambar">
                                        </div>
                                        <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Id</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="id" name="id" value=" {{ $ruangan->id }}" readonly>
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Kode Ruangan2</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" value=" {{ $ruangan->kode_ruangan }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Nama Ruangan</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value=" {{ $ruangan->nama_ruangan }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Foto Ruangan</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" id="foto_ruangan" name="foto_ruangan" accept="image/jpeg,image/png">
                                            <!--tampil nama gambar lama -->
                                            <input type="hidden" class="form-control" id="gambar_lama" name="gambar_lama" value="{{ $ruangan->foto_ruangan }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message}}</div>
                                        @enderror
                                    </div>
                       
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Keterangan</label>
                                        </div>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="keterangan" name="keterangan" value=" {{ $ruangan->keterangan }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Id Prodi</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-select" id="prodi" name="prodi">
                                            <option selected>Pilih Prodi</option>
                                            @foreach ($prodi as $row)
                                            <option value="{{ $row->id }}" @if ($ruangan->id_prodi==$row->id) {{ "selected" }} @endif>{{ $row->nama_prodi }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <!-- <div class="col-sm-8">
                                            <input type="select" class="form-control" id="id_prodi" name="id_prodi" value=" {{ $ruangan->id_prodi }}">
                                        </div> -->
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
@endsection