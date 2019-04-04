<div class="card">
    <div class="card-body">
        <h5 class="card-title"><a href="/questions/{{ $question->id }}">{{ $question->question }}</a></h5>
        <p class="card-text">{{ str_limit($question->description , 32)}}</p>
        <p class="card-text"><small class="text-muted">created by {{ $question->user->name }}</small></p>
    </div>
</div>