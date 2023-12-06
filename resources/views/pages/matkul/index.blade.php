@extends('layout.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Mata Kuliah</h1>
        <a href="{{ route('matkul.create') }}" class="btn btn-primary">Tambah Matkul</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Kode Matkul</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Hari</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($matkuls->count() > 0)
            @foreach($matkuls as $matkul)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $matkul->kd_mk }}</td>
                <td class="align-middle">{{ $matkul->matkul }}</td>
                <td class="align-middle">{{ $matkul->dosen }}</td>
                <td class="align-middle">{{ $matkul->hari }}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('matkul.edit', $matkul->id) }}" type="button" class="btn btn-primary">Edit</a>
                        <form action="{{ route('matkul.destroy', $matkul->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-0">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="6">Matkul Not Found</td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection