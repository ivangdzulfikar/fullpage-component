<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('layout.app')]
#[Title('Home Page')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
}
