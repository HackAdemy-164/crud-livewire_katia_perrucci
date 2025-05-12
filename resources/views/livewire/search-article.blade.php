<div>
    <div class="col-12 col-md-4">
        <input type="text" class="form-control" wire:model.live="search">
    </div>
    <div class="col-12 col-md-8">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 m-2">
                <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="{{route('article.edit', $article)}}" class="text-warning">Modifica</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>