<!-- resources/views/students/show.blade.php -->

@extends('layouts.layout')



@section('content')
    <div class="container">
        <h2>Student Details</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->fullname }}</h5>
                <p class="card-text"><strong>NPM:</strong> {{ $student->npm }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                <p class="card-text"><strong>Prodi:</strong> {{ $student->prodi }}</p>
            </div>
        </div>

        <a href="{{ route('students.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
