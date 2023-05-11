@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card ms_wrapper" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h3 class="original_title">{{ $movie->original_title }}</h3>
                    <h4 class="nationality">{{ $movie->nationality }} </h4>
                    <h5 class="date">{{ $movie->date }}</h5>
                    <h6 class="vote">{{ $movie->vote }}</h6>
                </div>
            </div>
        @endforeach
    </div>
@endsection
