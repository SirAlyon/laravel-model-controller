@extends('layouts.app')
@section('content')

<h1>I'm a test</h1>
<div class="container">
    <div class="row">
        
        @foreach($movies as $movie)

        <div class="col-4">

            <img class="img-fluid" src="https://picsum.photos/id/237/200" alt="">

            <div class="title">{{$movie->title}}</div>
            <div>{{$movie->original_title}}</div>
        </div>

        @endforeach

    </div>
</div>

@endsection