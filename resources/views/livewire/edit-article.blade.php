<div>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form class="shadow p-5 bg-dark text-white" wire:submit="update">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model="title">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" wire:model="subtitle">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea wire:model="body" class="form-control" id="body"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-light">Modifica</button>
        <button class="btn btn-danger" wire:click="delete">Elimina</button>
    </form>
</div>
