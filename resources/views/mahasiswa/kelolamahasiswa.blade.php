@extends('Layouts.app')

@section('title','Daftar Mahasiswa')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">FK_UNTAN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">FK_UNTAN</li>
                        </ol>
                            <div class="card mb-4">
                            <div class="card-body">
                            <a href="" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm mb-3">
                                    <i class="bi bi-person-add"></i> Tambah data Mahasiswa</a>
        <!-- Alert Hapus -->
                @if($errors->any())
                {!! implode('', $errors-all('<div style="color:red">:message</div>')) !!}
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
         <!--Akhir Alert Hapus -->
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama Lengkap</th>
                                            <th>TTL</th>
                                            <th>Prodi</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama Lengkap</th>
                                            <th>TTL</th>
                                            <th>Prodi</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @php
                                        $count=1
                                        @endphp
                                        @foreach ($mahasiswa as $row)
                               
                                       
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $row->nim }}</td>
                                            <td>{{ $row->nama_lengkap }}</td>
                                            <td>{{ $row->tempat_lahir }}</td>
                                            <td>{{ $row->prodi_id }}</td>
                                            <td>{{ $row->alamat}}</td>
                                            <td>{{ $row->no_hp}}</td>
                                            <td><a href="" class="btn btn-warning">Update</a> | <a href="" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">when scrolling, the navigation stays at the top of page. This is the end static navigation demo.</div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection