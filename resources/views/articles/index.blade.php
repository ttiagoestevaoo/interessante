@extends('layout')

@section('content')
<div id="wrapper">
    <ul class="style1">
        @foreach ($articles as $article)
        
        <li class="">
        <h3>{{$article->title}}</h3>
            <p><a href="/articles/{{$article->id}}">{{$article->excerpt}}</a></p>
            <p><a href="/articles/{{$article->id}}">{{$article->body}}</a></p>
        </li>

        @endforeach
    <ul>
</div>
@endsection