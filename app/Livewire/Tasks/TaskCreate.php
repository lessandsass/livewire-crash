<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Layout;
use Livewire\Component;

class TaskCreate extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.tasks.task-create');
    }
}
