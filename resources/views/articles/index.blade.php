@extends('app')


@section('content');

       <h1>Article Page :</h1>
           @if(count($articles))
            
             @foreach($articles as $article)
              <h2><a href="{{ url('/articles',$article->id) }}">{{ $article->title }}</a></h2>
              <div>{{ $article->body }}</div>
              @endforeach
            
            @endif
        
       

@stop