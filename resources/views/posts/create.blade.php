@extends('layouts.app')

@section('content')
    <h1>Create post</h1>
    
    <form action="{{action('PostController@store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <textarea name="body" id="editor1" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Subbmit</button>
    </form>
    
@endsection
