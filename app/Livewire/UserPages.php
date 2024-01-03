<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('User Page')]
class UserPages extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.user-pages');
    }
}
