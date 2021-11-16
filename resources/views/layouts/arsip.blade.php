@extends('master')

@section('content-title')
<div class=" text-center">
    <h1>Arsip Surat</i></h1>
    <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.<br> Klik "Lihat" pada kolom aksi untuk
        menampilkan surat.</p>
</div>

@endsection

@section('body')
<div class="table-list">
    <div class="row ">
        <div class="col-md-3 " style="margin-left: 110px">
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by title.." name="keyword" value="{{ $keyword }}" style="background-color: rgb(219, 219, 219)">
                    <button class="btn btn-warning" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class=" text-center" style="background-color: rgb(64, 64, 64)">
                        <th>Nomor Surat</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Waktu Pengerjaan</th>
                        <th>Aksi</i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($letters as $p)
                    <tr class=" text-center" style="background-color: rgb(64, 64, 64); color">
                        <td class="text-light">{{ $p->number}}</td>
                        <td class="text-light">{{ $p->category->name}}</td>
                        <td class="text-light">{{ $p->title}}</td>
                        <td class="text-light">{{ $p->created_at}}</td>
                        <td>
                            <a href="#" ><span class="badge bg-danger text-l">Hapus</span></a>
                            <a href="#"><span class="badge bg-warning text-l">Unduh</span></a>
                            <a href="#"><span class="badge bg-primary text-l">Lihat>></span></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <a href="/addArsip" class="btn btn-warning mb-5">Arsipkan Surat <i class="fas fa-upload"></i></a>
        </div>
    </div>
</div>
@endsection