@extends('layout')

@section('content')
<div id="wrapper">
    @forelse ($articles as $article)
    <ul class="style1">
        
        <li class="">
        <h3>{{$article->title}}</h3>
        <p><a href="{{$article->path()}}">{{$article->excerpt}}</a></p>
        <p><a href="{{$article->path()}}">{{$article->body}}</a></p>
        </li>

        <ul>
    @empty
    <p>No relevant articles</p>
    @endforelse
</div>
@endsection