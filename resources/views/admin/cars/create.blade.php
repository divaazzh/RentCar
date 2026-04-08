@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
            $table->string('nama_mobil');
            $table->string('slug');
            $table->integer('harga_sewa');
            $table->text('gambar');
            $table->string('bahan_bakar');
            $table->string('transmisi');
            $table->text('deskripsi');
            $table->boolean('p3k');
            $table->boolean('charger');
            $table->boolean('audio');
            $table->boolean('ac');
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="nama_mobil">Nama Mobil</label>
                    <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}">
                </div>
                <div class="form-group">
                    <label for="harga_sewa">Harga Sewa</label>
                    <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
                </div>
                <div class="form-group">
                    <label for="bahan_bakar">Bahan Bakar</label>
                    <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar') }}">
                </div>
                <div class="form-group">
                    <label for="jumlah_kursi">Jumlah Kursi</label>
                    <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi') }}">
                </div>
            </form>
        </div>
    </div>

@endsection