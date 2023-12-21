@extends('Layouts.app')
@section('title', 'Tampil Mahasiswa')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tampil Mahasiswa</h1>
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
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Nim</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nim" name="nim" value=" {{ $mahasiswa->nim }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Nama</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama" name="nama" value=" {{ $mahasiswa->nama }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Prodi</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="prodi" name="prodi" value=" {{ $mahasiswa->prodi }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Alamat</label>
                                        </div>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" id="alamat" name="alamat" value=" {{ $mahasiswa->alamat }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Tanggal Lahir</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value=" {{ $mahasiswa->tgl_lahir }}">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Foto Mahasiswa</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" id="foto_mahasiswa" name="foto_mahasiswa" accept="image/jpeg,image/png">
                                            <!--tampil nama gambar lama -->
                                            <input type="hidden" class="form-control" id="gambar_lama" name="gambar_lama" value="{{ $mahasiswa->foto_mahasiswa }}">

                                            <!--  -->
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message}}</div>
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