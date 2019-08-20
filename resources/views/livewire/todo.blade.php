<div>
    <input type="text" wire:model="todo">
    <button wire:click="add">+</button>
    <ul>
        @foreach($list as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</div>
