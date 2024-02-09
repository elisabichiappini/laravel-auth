@extends('layouts.admin')

@section('content')

    <h1>Progetti portfolio</h1>
    <!--bottone per di creare un nuovo progetto-->
    <!---->
    @if (session('message'))
    {{ session('message') }}
    @endif
    <div>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-warning my-3">Nuovo progetto</a>
    </div>
    <!--/bottone per di creare un nuovo progetto-->
    <!--tabella con popolamento dei dati del database-->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome progetto</th>
                <th scope="col">Data creazione</th>
                <th scope="col">Strumenti</th>
                <!--bottoni-->
                <th scope="col"></th>
                <!--/bottoni-->
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td >{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->born }}</td>
                <td>{{ $project->tools }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-info" role="button">Dettaglio</a>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary" role="button">Modifica</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline">
                        <!--token-->
                        @csrf
                        <!--/token-->
                        <!--method per cancellare-->
                        @method('DELETE')
                        <!--/method per cancellare-->
                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--tabella con popolamento dei dati del database-->

@endsection