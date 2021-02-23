@extends('layouts.app')

@section('content')


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>STUDENT</th>
                <th>CLASS</th>
                <th>COURSE</th>
                <th>Created at</th>
                <th>Updated at</th>

            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id}}</td>
                <td>{{ $student->student}}</td>
                <td>{{ $student->class}}</td>
                <td>{{ $student->course}}</td>

                <td>{{ $student->created_at}}</td>
                <td>{{ $student->updated_at}}</td>
                <td>
                
                    SHOW | EDIT | REMOVE

                </td>
            </tr>
        @endforeach

        </tbody>

@endsection 