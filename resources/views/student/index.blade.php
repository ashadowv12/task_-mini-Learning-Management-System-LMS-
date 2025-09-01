@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Courses</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach($courses as $course)
    <div class="card mb-3">
        <div class="card-body">
            <h4 class="card-title">{{ $course->title }}</h4>
            <p class="card-text">{{ $course->description }}</p>
            <p class="card-text"><strong>Price: ₹{{ $course->price }}</strong></p>
            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">View Details</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
