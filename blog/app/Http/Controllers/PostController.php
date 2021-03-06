<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Post $post, PostRequest $request)
    {
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
{
    return view('edit')->with(['post' => $post]);
}          //解説では'posts/edit'だったが、今のブランチはpostsファイルが無いため不要になる

public function updated(Post $post, PostRequest $request)
{
    $input = $request['post'];
    $post->fill($input)->save();

    return redirect('/posts/' . $post->id);
}

public function delete(Post $post)
{
    $post->delete();
    return redirect('/');
}
}
?>
