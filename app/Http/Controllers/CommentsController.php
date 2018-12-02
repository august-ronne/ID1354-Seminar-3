<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => ['required', 'min:10', 'max:255']
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['name'] = Auth::user()->name;
        $attributes['recipe'] = request('recipe');

        Comment::create($attributes);

        return back();
    }

    public function show($recipe)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back();
    }
}
