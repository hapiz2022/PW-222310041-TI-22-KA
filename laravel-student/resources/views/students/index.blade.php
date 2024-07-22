@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2>Students List</h2>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Fullname</th>
                <th>NPM</th>
                <th>Email</th>
                <th>Prodi</th>
                <th width="280px">Action</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->fullname }}</td>
                    <td>{{ $student->npm }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->prodi }}</td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
