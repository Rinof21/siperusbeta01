@extends('layouts.app')

@section('title', 'selamat datang di Aplikasi Peminjaman Ruangan')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Ruangan</h1>
        <ol class="breadcrumb mb-4">        </ol> 
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
                Session::put('Success', null)
                @endphp
                @endif
                {{-- <form action="{{ route('ruangan.simpanruangan') }}" method="post" enctype="multipart/form-data"> --}}
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Kode Ruangan</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan">
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
                                            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan">
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
                                            <input type="text" class="form-control" id="foto_ruangan" name="foto_ruangan">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-4">
                                            <label class="form-text" style="text-align:left">Keterangan</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                                        </div>
                                        @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" value="SIMPAN">
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>          
   </main>
@endsection