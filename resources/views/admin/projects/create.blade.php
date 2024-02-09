@extends('layouts.admin')

@section('content')
    <h2>Nuovo progetto</h2>
    <!--mostra errori di validazione-->
    @include('partials.errors')
    <!--/mostra errori di validazione-->
    <!--form-->
    <form action="{{ route('admin.projects.store')}}" method="POST">
        <!--token per validazione form-->
        @csrf
        <!--/token per validazione form-->
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="born" class="form-label">Creato il</label>
            <input type="text" class="form-control" id="born" name="born" value="{{ old('born') }}">
        </div>
        <div class="mb-3">
            <label for="tools" class="form-label">Strumenti</label>
            <input type="text" class="form-control" id="tools" name="tools" value="{{ old('tools') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description" value="{{ old('description') }}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
    <!--form-->
@endsection