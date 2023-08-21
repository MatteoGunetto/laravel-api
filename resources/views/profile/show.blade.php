@extends('layouts.app')
@section('content')
    <div class="container bg-info text-dark my-3">
    <div class="text-center">Titolo Progetto:</div>
    <h1 class="text-center container">{{ ucfirst($projects->name) }}</h1>
    <div class="row justify-content-between fs-5 py-4">
        <span class="col-2 "><strong>Descrizione:</strong></span>
        <span class=" col-6 fs-5">{{ $projects->description }}</span>
    </div>
    <div>
        <img src="{{ asset('storage/images' . $projects->main_picture) }}">
    </div>
    <div class="row justify-content-between py-4">
        <span class="col-2"><strong>Numero commit:</strong></span>
        <span class="col-6">{{ $projects->commit }}</span>
    </div>
    <div class="row justify-content-between py-4">
        <span class="col-2"><strong>Tipologia:</strong></span>
        <span class=" col-6">{{ $projects->type->name }}</span>
    </div>
    <div class="row justify-content-between py-4">
        <span class="col-2"><strong>Tecnologie:</strong></span>
        <span class=" col-6">
            @foreach ($projects->technologies as $item)
                {{ $item->name }},
            @endforeach
        </span>
    </div>
    </div>
    {{-- edit --}}
    <div class="container">
        <div class="justify-content-between">
            <a class="btn btn-warning py-1 px-3 mx-3 text-decoration-none" href="{{ route('edit', $projects->id) }}">Edit project</a>
        {{-- home --}}
            <a class=" btn btn-secondary py-1 px-3 text-decoration-none text-light" href="{{ route('index') }}">Home</a>
            <a class="btn btn-warning py-1 px-3 mx-3 text-decoration-none" href="{{ route('create') }}">create</a>
        </div>
    </div>
@endsection
