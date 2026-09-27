@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body">
        <h1 class="text-center mb-4">Daftar Pengguna</h1>

        @include('components.user-table', ['users' => $users])
    </div>
</div>

@endsection