<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class SearchInput extends Component
{
    public $search;
    public $keywords;
    public $mockKeywords;

    public function mount()
    {
        $this->init();
    }

    public function init()
    {
        $this->search = '';
        $this->keywords = [];
        $this->mockKeywords = [
            'banana',
            'apple',
            'iphone',
            'iMac',
            'car',
            'cat',
            'pineapple',
            'mango',
            '사과',
            '사람',
            '마늘',
            '고등어',
            '곰팡이',
            '망아지',
            '고양이',
            '강아지'
        ];
    }

    public function updatedQuery()
    {
        $search = $this->search;
        $this->keywords = collect($this->mockKeywords)
            ->filter(function ($item, $key) use ($search) {
                return Str::contains($item, $search);
            })
            ->toArray();
    }

    public function render()
    {
        $this->updatedQuery();
        return view('livewire.search-input');
    }
}
