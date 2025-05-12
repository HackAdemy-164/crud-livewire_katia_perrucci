<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Modifica articolo</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <livewire:edit-article :article="$article" />
            </div>
        </div>
    </div>
</x-layout>