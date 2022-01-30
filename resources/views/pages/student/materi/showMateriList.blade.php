@extends('layouts.dash')

@section('title', 'Pilih Materi')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h5><strong>Materi -> Pilih Mata Kuliah</strong></h5>
                    </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Materi</li>
                    <li class="breadcrumb-item">Pilih Matkul</li>
                    <li class="breadcrumb-item">Pilih Materi</li>
                </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        @foreach ($materis->chunk(4) as $materi)
        <div class="row">

          <!-- Show List of matkuls -->
          @foreach($materi as $m)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h4>{{ $m->judul }}</h4>
                    <br>
                    <p style="line-height:0px;">{{ $m->matkul }}</p>
                    <p>{{ $m->kelas }}</P>
                </div>
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <a href="/Student/Materi/singleMateri/{{ $m->id }}" class="small-box-footer">Lihat Materi Ini <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
          @endforeach

        </div>
        @endforeach
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
