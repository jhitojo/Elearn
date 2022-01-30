@extends('layouts.dash')

@section('title', 'Mahasiswa Home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-md-12 text-center">
                    <h4><strong>Welcome to Mahasiswa Home</strong></h4>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('dash/dist/img/mhs.png') }}" class="mx-auto d-block" alt="Welcome Mahasiswa" width="45%">
                <br>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
