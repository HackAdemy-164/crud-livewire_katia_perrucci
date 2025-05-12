<div>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form class="shadow p-5 bg-dark text-white" wire:submit="store">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            {{-- data binding --}}
            <input type="text" class="form-control" id="title" wire:model.live="title">
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" wire:model.blur="subtitle">
            @error('subtitle')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea wire:model="body" class="form-control" id="body"></textarea>
            @error('body')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-light">Inserisci</button>
    </form>
</div>