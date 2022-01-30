@extends('layouts.dash')

@section('title', 'Dosen Home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-md-12 text-center">
                    <h4><strong>Welcome to Dosen Home</strong></h4>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('dash/dist/img/Dosen.png') }}" class="mx-auto d-block" alt="Welcome Dosen" width="45%">
                <br>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
