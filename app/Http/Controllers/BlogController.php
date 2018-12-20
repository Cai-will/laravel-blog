<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use App\models\Post;
class BlogController extends Controller
{
    public function index()
    {
        $auth = Auth::user()->name;
        $posts = DB::table('posts')->simplePaginate(5);
        return view('post')->with('title', 'My Blog')->with('posts', $posts)->with('auth', $auth);
        
    }

    public function create()
    {
        return view('create')->with('title', '新增文章');

    }

    public function store()
    {
        $post = new Post;
        $post->title = Input::get('title');
        $post->user = Auth::user()->name;
        $post->content = Input::get('content');
        $post->save();
        return redirect('/');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('show')->with('title', 'create')->with('post', $post);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit')->with('title', 'edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $post->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/');
    }
}
