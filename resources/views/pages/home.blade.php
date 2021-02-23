@extends('layouts.app')

@section('home')

<div class="jumbotron">
    <h1 class="display-3">Archivio Studenti - Università Telematica</h1>
    <hr class="my-2">
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}" role="button">Accedi all'archivio Studenti</a>
    </p>
</div>






@endsection