@extends('layout.app')

@section('body')
        <h1 class="mb-0">Add Matkul</h1>
    <hr />
    <form action="{{ route('matkul.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kd_mk" class="form-control" placeholder="Kode Matkul">
            </div>
            <div class="col">
                <input type="text" name="matkul" class="form-control" placeholder="Nama Matkul">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="dosen" class="form-control" placeholder="Nama Dosen">
            </div>
            <div class="col">
                <input type="text" name="hari" class="form-control" placeholder="Hari">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection