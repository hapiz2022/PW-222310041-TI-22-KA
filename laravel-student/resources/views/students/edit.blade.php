<!-- resources/views/students/edit.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2>Edit Student</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fullname">Fullname:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $student->fullname }}">
            </div>
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm" value="{{ $student->npm }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $student->prodi }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
