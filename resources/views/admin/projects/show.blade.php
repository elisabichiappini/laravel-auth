@extends('layouts.admin')

@section('content')
    <!--elementi in vista del singolo progetto-->
    <h2>{{ $project->title }}</h2>
    <h6>{{ $project->born }}</h6>
    <h3>{{ $project->tools }} </h3>
    <p>{{ $project->description}}</p>
    <!--elementi in vista del singolo progetto-->
    <!--bottone per tornare alla lista progetti-->
    <a href="{{ route('admin.projects.index') }}" class="btn btn-info">Torna ai progetti</a>
    <!--bottone per tornare alla lista progetti-->
@endsection