@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Class</th>
            <th scope="col">Roll No</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Email Id</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->rollno}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->email}}</td>
                <td><a href="/student/{{ $student->id }}/edit" class="btn btn-success mr-1">Edit</a><a href="/delete/{{ $student->id }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
      </table>
      <a href="student/create" class="btn btn-success">Create New Student</a>
</div>
@endsection
