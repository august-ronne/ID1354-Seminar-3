@extends('layout-recipe')

@section('content')

    <div class="recipe-grid">

        <div class="image-container">
            <img src="{{ asset('images/pancakes.png') }}">
        </div>

        <header class="recipe-header">
            Swedish Style Pancakes
        </header>

        <ul class="ingredients">
            <li>- 2 and 1/2 dl all purpose flour</li>
            <li>- 1/2 tsp salt</li>
            <li>- 6 dl milk</li>
            <li>- 3 eggs</li>
            <li>- 3 tbsp butter</li>
            <li>- orange compot for serving</li>
        </ul>

        <header class="instructions-header">
            Cooking Instructions
        </header>

        <div class="instructions-body">
            <p>Mix flour and salt in a bowl. Add half of the milk while whisking. Continue
            whisking until the batter is smooth, then add the remaining milk along
                with the eggs.</p>
            <p>
            Melt the butter in a frying pan or the microwave. Add the melted butter to
            your batter. Pan fry the pancakes, trying to keep them as thin as possible.
            </p>
            <p>Serve the pancakes with an orange compot.</p>
        </div>

    </div>

    @include('pages.recipes.comments')

@endsection