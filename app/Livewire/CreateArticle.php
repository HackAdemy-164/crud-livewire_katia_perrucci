<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required|min:8|max:100')]
    public $title;
    #[Validate('required|min:6')]
    public $subtitle;
    #[Validate('required')]
    public $body;

    /* protected function rules(){
        return [
            'title' => 'required|min:8|max:100',
            'subtitle' => 'required',
            'body' => 'required'
        ];
    } */

    protected function messages(){
        return [
            'required' => 'Campo richiesto',
            'min' => 'Il campo deve avere :min caratteri',
            'max' => 'Il campo deve avere :max caratteri'
        ];
    }

    public function store(){
        //^ prima validami i campi inseriti nel form
        $this->validate();

        //^ crei l'articolo nel db
        $article = Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);

        //^ resetta la proprietà
        $this->reset();

        //^ rimanda l'utente nella stessa pagina con un messaggio flash
        session()->flash('message', 'Articolo creato correttamente');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
