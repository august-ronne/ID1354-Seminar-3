@extends('layout')

@section('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <section class="index-content">
        <h1 class="index-header">Welcome to Painfully Mediocre Recipes!</h1>
        <div class="index-body-text">
            <p>On this website Chef August, proud owner of
            Painfully Mediocre Recipes, has collected his
                favorite mediocre recipes for you to enjoy.</p>
            <p>Due to a general lack of ambition there are currently
            only two recipes available for our guests, but more
                are on the way!</p>
            <p>You can find all our recipes by clicking on 'Recipes'
            in the menu, or if you wish to have a special dish recommended
            to you for each day of the month, you should click on
            Calendar.</p>
            <p>Hope you enjoy your visit.</p>
        </div>
    </section>

@endsection