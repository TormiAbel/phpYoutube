@extends('layout')

@section('content')
    <div class="card">
        <h1 class="card-header">Video view through authentication middleware (directed from videos.index) </h1>
        <video src="{{$video->path}}" controls class="card-img-top" alt="..."></video>
        <div class="card-body">
            <h5 class="card-title">{{$video->title}}</h5>
            <p class="card-text">{{$video->description}}</p>
        </div>
        <div class="card-footer text-muted">
            {{$video->created_at->diffForHumans()}}
        </div>
    </div>
    <a href="{{route('videos.index')}}" class="btn btn-danger ">Back</a>

    @foreach($video->comments as $key => $comment)
    <div class="card mt-2">
        <div class="card-body">
            <p class="card-text">{{$comment->body}}</p>
        </div>
        <div class="card-footer text-muted">
            {{$comment->user->name}}
            {{$comment->created_at->diffForHumans()}}
        </div>

        </div>

        @endforeach

@endsection