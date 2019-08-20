<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModelBinding extends Component
{
    public $name;

    public function mount()
    {
        $this->name = 'Nick';
    }

    public function render()
    {
        return view('livewire.model-binding');
    }
}
