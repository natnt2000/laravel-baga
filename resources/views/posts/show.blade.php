@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-success">Go Back</a>
    <br>
    <h1>{{$post->title}}</h1>
    
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <br>

    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            
            <form action="{{action('PostController@destroy', $post->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        @endif
    @endif
@endsection