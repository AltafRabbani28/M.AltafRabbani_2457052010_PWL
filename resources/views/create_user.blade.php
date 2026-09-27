@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Buat Pengguna Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM:</label>
                        <input type="text" class="form-control" id="npm" name="npm" required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas_id" class="form-label">Kelas:</label>
                        <select class="form-select" name="kelas_id" id="kelas_id" required>
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">
                                    {{ $kelasItem->nama_kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection