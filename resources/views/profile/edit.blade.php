@extends('layouts.app')
@section('content')
    <form class="container my-2" method="POST"
    action="{{ route('update', $project->id) }}"
    enctype='multipart/form-data'>
        @csrf
        @method('put')
        <div class="d-flex flex-column align-items-center">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" value="{{ $project->name }}">
            <label for="description">Descrizione</label>
            <label for="main_picture">photo</label>
            <input type="file" name="main_picture" id="main_picture">
            <input type="text" id="description" name="description" value="{{ $project->description }}">
            <label for="commit">Commit</label>
            <input type="text" id="commit" name="commit" value="{{ $project->commit }}">
            <label class="my-2" for="tipologia">Tipologia</label>
            <select class="my-2" name="type_id" id="type_id">
                {{-- Condizione if per riportare la tipologia attuale --}}
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $project->type->id == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach
            </select>
            <label class="my-2"><strong>Tecnologie:</strong></label>

            {{-- Ciclo tutte le tecnologie --}}
            @foreach ($technologies as $technology)
                <div>
                    <label for="technology{{ $technology->id }}">{{ $technology->name }}</label>
                    <input type="checkbox" name="technology[]" id="technology{{ $technology->id }}"
                        value="{{ $technology->id }}" {{-- Ciclo tutte le tecnologie del progetto, metto una condizione if per dare il check --}}
                        @foreach ($project->technologies as $item)
                            @if ($item->id == $technology->id)
                                checked
                            @endif @endforeach>

                </div>
            @endforeach
            <button type="submit" class="btn btn-primary my-4">Aggiorna progetto</button>
        </div>
        <div class="text-center pt-3">
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
