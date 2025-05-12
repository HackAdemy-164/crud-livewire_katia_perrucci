<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Lista degli articoli</h1>
            </div>
        </div>
    </div>
    @if(session('messageDelete'))
    <div class="alert alert-success">
        {{ session('messageDelete') }}
    </div>
    @endif
    <div class="container my-5">
        <div class="row">
            <livewire:search-article />
        </div>
    </div>
</x-layout>