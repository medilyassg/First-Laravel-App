@extends('master')

@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des posts </title>
@endsection()

@section('content')


<h1 class="title">Liste des Posts : </h1>
@if (count($posts)>0)
<div class="posts">
    
        @foreach ($posts as $post )
            <div class="post">
                
                <a href="{{ route('posts.show',$post) }}"><h3>{{ $post->title }}</h3></a>
                <p>{{  Str::substr($post->content,0, 100   ) }}</p>
                <small>Publie a : {{ $post->created_at->format("d/m/Y H:i:s") }}</small>
                <a href="{{ route('posts.show',$post) }}"><h5>Details</h5></a>
            </div>
            
        @endforeach
    
</div>
    
@else 
    <p>Aucun post</p>
@endif
    

@endsection




