<?php

namespace App\Http\Controllers;
use App\Models\Post;

class BlogController extends Controller
{
    // seperti komponen tp bukan komponen halaman posts yg plural
    

    // halaman home isinya posts banyak
    public function home()
    {
        $posts = Post::data();
        $totalPosts = Post::count();
        return view('home', compact('posts', 'totalPosts'));
    }

    // single kalo diklik satu2
    public function show($id)
    {
        $post = Post::cariData($id);

        if (!$post) {
            abort(404);
        }

        return view('post', compact('post'));
    }

    //halaman tentang
    public function about()
    {
        $info = [
            'name' => 'deva',
            'bio' => 'penulis.'
        ];

        return view('about', compact('info'));
    }
}