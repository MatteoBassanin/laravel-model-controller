@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <div class="ms_container">
            <h2 class="title">{{ $movie->title }}</h2>
            <h3 class="original_title">{{ $movie->original_title }}</h3>
            <h4 class="nationality">{{ $movie->nationality }} </h4>
            <h5 class="date">{{ $movie->date }}</h5>
            <h6 class="vote">{{ $movie->vote }}</h6>
        </div>
    @endforeach
@endsection
