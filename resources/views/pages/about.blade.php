@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>This is about page</p>

    @if(count($categories) > 0)
        <ul class="list-group">
            @foreach ($categories as $cate)
                <li class="list-group-item">{{$cate}}</li>
            @endforeach
        </ul>
    @endif
@endsection