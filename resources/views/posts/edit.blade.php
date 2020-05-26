@extends('layouts.app')

@section('content')
    <h1>Edit post</h1>
<form action="{{action('PostController@update', $post->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Title</label>
        <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="">Title</label>
        <textarea name="body" id="editor1" id="" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
        </div>
        <button class="btn btn-primary">Subbmit</button>
    </form>
@endsection

