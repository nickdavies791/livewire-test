<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $list;
    public $todo;

    public function mount()
    {
        $this->list = [
            'Task 1',
            'Task 2',
            'Task 3'
        ];
    }

    public function add()
    {
        $this->list[] = $this->todo;
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
