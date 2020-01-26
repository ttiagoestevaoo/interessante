@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                
                <h1>New Article</h1>
            <form action="/articles/{{$article->id}}/" method="post">
                @csrf
                @method('PUT')
                <div class="field">
                    <label for="title" class="label"> Tittle</label>
                
                    <div class="control">
                    <input class='input' type="text" value="{{$article->title}}" name="title" id="title">
                </div>
            </div>
            <div class="field">
                <label for="excerpt" class="label"> Excerpt</label>
                
                <div class="control">
                    <textarea class='input'  name="excerpt" id="excerpt">{{$article->excerpt}} </textarea>
                </div>
            </div>

            <div class="field">
                <label for="body" class="label"> Body</label>
                
                <div class="control">
                    <textarea class='input'  name="body" id="body">{{$article->body}}</textarea>
                </div>
            </div>
            
            <div class="field id-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
            </form>   
        </div>
        </div>
    </div>
    @endsection