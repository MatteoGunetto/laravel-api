@extends('layouts.app')
@section('content')
    <div class="container col-9 ">
        <div class="text-center">
            <h1 class=" mt-2 py-3 text-dark  bg-info">progetti</h1>
            <div>
                <ul class="p-0">
                    @foreach ($projects as $project)
                        <li class="list-unstyled py-1 px-3 my-2  bg-dark">
                            <a class="text-decoration-none text-white" href="{{ route('show', $project->id) }}">
                                {{($project->name) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
