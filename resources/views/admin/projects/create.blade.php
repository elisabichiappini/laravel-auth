@extends('layouts.admin')

@section('content')
    <h2>Nuovo progetto</h2>
    <!--form-->
    <form action="{{ route('admin.projects.store')}}" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="born" class="form-label">Creato il</label>
            <input type="text" class="form-control" id="born" name="born">
        </div>
        <div class="mb-3">
            <label for="tools" class="form-label">Strumenti</label>
            <input type="text" class="form-control" id="tools" name="tools">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <!--form-->
@endsection