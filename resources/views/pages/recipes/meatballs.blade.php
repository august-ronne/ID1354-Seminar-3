@extends('layout-recipe')

@section('content')

    <div class="recipe-grid">
        <div class="image-container">
            <img src="{{ asset('images/meatballs.png') }}">
        </div>
        <header class="recipe-header">
            Swedish Meatballs
        </header>
        <ul class="ingredients">
            <li>1 and 1/2 dl milk</li>
            <li>5 tbsp breadcrumbs</li>
            <li>500g beef or pork mince</li>
            <li>1/2 onion (peeled and grated)</li>
            <li>1 egg</li>
            <li>1 tsp salt</li>
            <li>1 tsp black pepper</li>
            <li>butter for pan frying</li>
        </ul>
        <header class="instructions-header">
            Cooking Instructions
        </header>
        <div class="instructions-body">
            <p>Mix milk and breadcrumbs. Let the mixture rest for 10 minutes.
            Add mince, onion, salt, and pepper to the mixture. Work the mixture
                until it is well mixed.</p>
            <p>Wet your hands with cold water and form meatballs. Use approximately
            1 tbsp of mixture for each meatball. Fry them in butter, being careful
            not too overcrowd the pan. Shake the frying pan occasionally to ensure
            they keep their round shape.</p>
            <p>Serve the meatballs with mashed potatoes and lingonberry jam.</p>
        </div>
    </div>

    @include('pages.recipes.comments')

@endsection