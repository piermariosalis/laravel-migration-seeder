@extends('layouts.app')

@section('content')
     
     <a href="{{ route ('students.create') }}" class=" btn btn-warning ">Inserisci</a>

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
                
                <a href="" class="btn btn-primary">
                
                <i class="fas fa-eye fa-lg fa-fw"></i>SHOW
                </a>

               

                <a href="" class="btn btn-primary">
                
                <i class="fas fa-eye fa-lg fa-fw"></i>EDIT
                </a>

                

                <form action="" method="post">
                    <button type="purge" class="btn btn-danger">
                    
                    <i class="fas fa-trash"></i>
                    PURGE</button>      
                </form>


                
                

                </td>
            </tr>
        @endforeach

        </tbody>

@endsection 