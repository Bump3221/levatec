<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
     <body>
        <h1>Blog Name</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
    
    　　@foreach ($posts as $post)
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
            </form>
                <div class='posts'>
                {{-- コメント --}}
                <div class='post'>
                    <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                </div>
             
    　  @endforeach
        </div>
        <script>
        function deletePost(id){
    
            if (window.confirm('削除すると復元できません。\n 本当に削除しますか？')){
                document.getElementById(`form_${id}`).submit();
            }
            
        }
        </script>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
