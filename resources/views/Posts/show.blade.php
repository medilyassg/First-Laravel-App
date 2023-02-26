@extends('master')

@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des posts </title>
@endsection('')

@section('content')
    <div class="postDetails">
        <div class="userinfo">
            @vite(['resources/images/'])
            <img src="user.png" >
            <p>{{$post->user->name}}</p>
        </div>
        <div class="postinfo">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <small>Publie a : {{ $post->created_at }}</small>
        </div>
        <div class="comments">
            <h3>comments ({{ count($post->comment) }}) :</h1>
                @if (count($post->comment)===0)
                    <small>Aucun Commentaire</small>
                @else
                    @foreach ( $post->comment as $comment )
                    <div class="comment">
                        <p>{{ $comment->body }}</p>
                        <small>created at {{ $comment->created_at }}</small>
                    </div>
                    @endforeach
                @endif

        </div>
    </div>
    
        
    </ul>

    

@endsection




