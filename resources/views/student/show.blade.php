@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <p><strong>Price: ₹{{ $course->price }}</strong></p>

    <form action="{{ url('courses/'.$course->id.'/enroll') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Enroll Now</button>
    </form>
</div>
@endsection
