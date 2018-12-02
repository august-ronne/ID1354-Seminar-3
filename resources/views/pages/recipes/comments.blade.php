@if ($user)

    <form method="POST" action="/comments">
        @csrf

        <input type="hidden" name="recipe" value="{{ $recipe }}">
        <div class="comment-submit-container">

            <textarea class="submit-body" name="body" placeholder="Write your comment here"></textarea>

            <button type="submit">Submit Comment</button>
        </div>

    </form>

    <div class="error-message">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

@foreach ($comments as $comment)
    <div class="comment-container">

        <header class="comment-author">{{ $comment->name }}</header>
        <header class="comment-date">{{$comment->created_at}}</header>
        <div class="comment-body">{{$comment->body}}</div>

        @if ($user)
            @if ($user->name == $comment->name)
                <form method="POST" action="/comments/{{ $comment->id }}">
                    @method('DELETE')
                    @csrf
                    <div class="delete-button">
                        <button type="submit">Delete Comment</button>
                    </div>
                </form>
            @endif
        @endif
    </div>
@endforeach