@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row gx-2">
        
        @foreach($movies as $movie)

        <div class="col-4">
            <div class="movie mt-3">

                <img src="https://picsum.photos/400" alt="">
                <div class="title">{{$movie->title}}</div>
                <div>{{$movie->original_title}}</div>

            </div>
            
        </div>

        @endforeach

    </div>
</div>

@endsection