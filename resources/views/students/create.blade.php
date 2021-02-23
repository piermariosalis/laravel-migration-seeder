@extends('layouts.app')
@section('content')
<div style="padding: 60px 0;"><h2>Aggiungi Dati Studente</h2></div>
<form action="{{ route('students.store') }}" method="post">
    @csrf 
    <div style="width:1170px; margin: auto;" class="form-group">
      <label for="student"><h3>Student</h3></label>
      <input type="text"
        class="form-control" name="student" id="student" aria-describedby="studentHelper" placeholder="Inserisci nome e cognome (Studente) ..">
      <small id="studenteHelper" class="form-text text-muted">Aggiunta nuovo studente</small>
      @error 
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <button type="submit" class="btn btn-danger">Aggiungi</button>
    </div>
    
</form>


@endsection