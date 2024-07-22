<!-- resources/views/students/create.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2>Add New Student</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fullname">Fullname:</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <input type="text" class="form-control" id="prodi" name="prodi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
