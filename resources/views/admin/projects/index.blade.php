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
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">DATE</th>
                <th scope="col"></th><!--bottoni-->
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td >{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->born }}</td>
                <td>
                    <a href="" class="btn btn-primary" role="button">edit</a>
                    <a href="" class="btn btn-secondary" role="button">delete</a>
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-info" role="button">show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--tabella con popolamento dei dati del database-->

@endsection