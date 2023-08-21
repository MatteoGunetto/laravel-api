@extends('layouts.app')
@section('content')
    <form class="container my-2" method="POST"
    action="{{ route('store') }}"
    enctype='multipart/form-data'



    >
        @csrf
        @method('POST')

        <div class="d-flex flex-column align-items-center">
            <h1 class="py-2">Nuovo progetto</h1>
            <label for="name"><strong>Nome</strong></label>
            <input type="text" id="name" name="name">
            <label for="description"><strong>Descrizione</strong></label>
            <input type="text" id="description" name="description">
            <label for="main_picture">photo</label>
            <input type="file" name="main_picture" id="main_picture">

            <label for="commit"><strong>Commit</strong></label>
            <input type="text" id="commit" name="commit">
            <label class="my-2" for="tipologia"><strong>Tipologia</strong></label>
            <select class="my-2" name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            <label class="my-2"><strong>Tecnologie:</strong></label>
            @foreach ($technologies as $technology)
                <div>
                    <label for="technology{{ $technology->id }}">{{ $technology->name }}</label>
                    <input type="checkbox" name="technology[]" id="technology{{ $technology->id }}"
                        value="{{ $technology->id }}">
                </div>
            @endforeach


            <button type="submit" class="btn btn-primary my-4">Crea progetto</button>
        </div>
        {{-- Bottone per tornare a index --}}
        <div class="text-center py-3">
            <a class="rounded bg-secondary py-1 px-2 text-decoration-none text-light"
                href="{{ route('index') }}">Indietro</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
