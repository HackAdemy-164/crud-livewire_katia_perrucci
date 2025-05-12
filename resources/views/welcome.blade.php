<x-layout>
    <div class="container-fluid py-5 bg-dark text-white">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center">Laravel Livewire</h1>
            </div>
        </div>
    </div>
    {{--<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center" id="number">0</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-danger mx-2" id="decrement">-1</button>
                <button class="btn btn-success mx-2" id="increment">+1</button>
            </div>
        </div>
    </div>--}}
    <livewire:counter />
    <livewire:counter />
</x-layout>
<script>
    let number = document.querySelector('#number');
    let decrement = document.querySelector('#decrement');
    let increment = document.querySelector('#increment');
    let value = number.innerHTML;
    //console.log(value);
    
    decrement.addEventListener('click', () => {
        value--;
        number.innerHTML = value;
    });

    increment.addEventListener('click', () =>{
        value++;
        number.innerHTML = value;
    })
</script>