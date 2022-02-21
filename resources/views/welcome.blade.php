@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center align-items-center flex-column">

        <h1>All Students</h1>
        <div class="d-flex flex-wrap">
        @foreach ($students as $student)
            @if ($student->age > 24)
                <div class="card bg-primary" style="width: 18rem;">
            @elseif ($student->age == 22 || $student->age == 23)
                <div class="card bg-danger" style="width: 18rem;">
            @else
                <div class="card bg-dark" style="width: 18rem;">
            @endif
            <div class="card-body">
                <h5 class="card-title text-white">{{ $student->name }}</h5>
                <h6 class="card-subtitle mb-2 text-white">gender: {{ $student->gender }}</h6>
                <h6 class="card-subtitle mb-2 text-white">email: {{ $student->email }}</h6>
                <h6 class="card-subtitle mb-2 text-white">age: {{ $student->age }}</h6>
            </div>
        </div>
        @endforeach
        </div>

        <h1>All Women</h1>
        <div class="d-flex flex-wrap">
        @foreach ($AllWomen as $student)
            @if ($student->age > 24)
                   <div class="card bg-primary" style="width: 18rem;">
            @elseif ($student->age == 22 || $student->age == 23)
                <div class="card bg-danger" style="width: 18rem;">
            @else
                <div class="card bg-dark" style="width: 18rem;">
            @endif
            <div class="card-body">
                <h5 class="card-title text-white">{{ $student->name }}</h5>
                <h6 class="card-subtitle mb-2 text-white">gender: {{ $student->gender }}</h6>
                <h6 class="card-subtitle mb-2 text-white">email: {{ $student->email }}</h6>
                <h6 class="card-subtitle mb-2 text-white">age: {{ $student->age }}</h6>
            </div>
            </div>
        @endforeach
        </div>

        <h1>All Men</h1>
        <div class="d-flex flex-wrap">
        @foreach ($AllMen as $student)
            @if ($student->age > 24)
                <div class="card bg-primary" style="width: 18rem;">
            @elseif ($student->age == 22 || $student->age == 23)
                <div class="card bg-danger" style="width: 18rem;">
            @else
                <div class="card bg-dark" style="width: 18rem;">
            @endif
            <div class="card-body">
                <h5 class="card-title text-white">{{ $student->name }}</h5>
                <h6 class="card-subtitle mb-2 text-white">gender: {{ $student->gender }}</h6>
                <h6 class="card-subtitle mb-2 text-white">email: {{ $student->email }}</h6>
                <h6 class="card-subtitle mb-2 text-white">age: {{ $student->age }}</h6>
            </div>
            </div>
        @endforeach
        </div>

    </div>
@endsection
