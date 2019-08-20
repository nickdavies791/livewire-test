<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoadingStates extends Component
{
    public function checkout()
    {
        return 'Test';
    }
    public function render()
    {
        return view('livewire.loading-states');
    }
}
