<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view("posts.show", compact("post"));
    }

    public function create()
    {
        return view("posts.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            // Autres règles de validation si nécessaire
        ]);

        // Créer le post
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = auth()->id(); // Assurez-vous de stocker l'ID de l'utilisateur connecté
        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post créé avec succès!');
    }
}
