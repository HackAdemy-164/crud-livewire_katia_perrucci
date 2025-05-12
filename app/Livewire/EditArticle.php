<?php

namespace App\Livewire;

use Livewire\Component;

class EditArticle extends Component
{
    public $title;
    public $subtitle;
    public $body;
    public $article;

    public function mount(){
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }

    public function update(){
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);
        session()->flash('message', 'Articolo modificato correttamente');
    }

    public function delete(){
        $this->article->delete();
        return redirect(route('article.index'))->with('messageDelete', 'Articolo eliminato correttamente');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
