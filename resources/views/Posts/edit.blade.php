
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/create.css'])
</head>
<body>
    <form action="{{ route('posts.update',$post->id) }}" method="post">
        <h2>Edit {{ $post->title }}</h2>
        @csrf
        @method('PATCH')
        <div class="title">
            @error('title')
                <span class="error">
                    <small>{{ __(' invalid title !') }}</small>
                </span>
            @enderror
            <label for="title">{{ __('post title :') }}</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" @error('title') is-invalid @enderror autocomplete="title" autofocus>
        </div>
        <div class="content">
            @error('content')
                <span class="error">
                    <small>{{ __(' invalid content !') }}</small>
                </span>
            @enderror
            <label for="content">{{ __('post content :') }}</label>
            <textarea name="content" id="content" cols="30" rows="10"  value='{{ $post->content }}' @error('content') is-invalid @enderror autocomplete="content"></textarea>
    
        </div>
        <div class="submit">
            <input type="submit" value="{{ __('save') }}">
        </div>
        
    </form>
</body>
</html>
