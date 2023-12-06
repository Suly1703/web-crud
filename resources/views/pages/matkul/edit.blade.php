@extends('layout.app')

@section('body')
    <h1 class="mb-0">Edit Matkul</h1>
    <hr />
    <form action="{{ route('matkul.update', $matkul->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kode Matkul</label>
                <input type="text" name="kd_mk" class="form-control" placeholder="Kode Matkul" value="{{ $matkul->kd_mk }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Matkul</label>
                <input type="text" name="matkul" class="form-control" placeholder="Nama Matkul" value="{{ $matkul->matkul }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Dosen</label>
                <input type="text" name="dosen" class="form-control" placeholder="Nama Dosen" value="{{ $matkul->dosen }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Hari</label>
                <input type="text" name="hari" class="form-control" placeholder="Hari" value="{{ $matkul->hari }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection