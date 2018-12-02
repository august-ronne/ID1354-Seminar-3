@extends('layout')

@section('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <section class="index-content">
        <h1 class="index-header">Recipe Catalog</h1>
        <div class="index-body-text">
            <p>Here we have collected all of our recipes!</p>
            <p>If a recipe interests you, simply click on the link in order to read it.</p>
            <a href="/recipes/pancakes">Swedish Style Pancakes</a>
            <a href="/recipes/meatballs">Swedish Meatballs</a>
        </div>
    </section>

@endsection