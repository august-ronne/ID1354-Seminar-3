<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function calendar() {
        return view('pages.calendar');
    }

    public function recipes_collection() {
        return view('pages.recipes');
    }

    public function recipe($recipe) {
        $comments =  (new Comment())->getRecipeComments($recipe);
        $user = (new User())->getUser();

        return view('pages.recipes.'.$recipe)->with(compact('recipe', 'comments', 'user'));
    }
}
