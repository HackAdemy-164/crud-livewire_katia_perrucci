<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class SearchArticle extends Component
{
    public $search = '';

    public function render()
    {
        if(!$this->search){
            $articles = Article::all();
        } else {
            $articles = Article::where('title', 'like', "%$this->search%")
                                ->orWhere('subtitle', 'like', "%$this->search%")
                                ->get();
        }
        return view('livewire.search-article', ['articles' => $articles]);
    }
}
