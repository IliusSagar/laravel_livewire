<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $username = "testuser";

    public function createNewUser()
    {
        User::create([
            'name' => "test user2",
            'email' => "test2@test.com",
            'password' => '1313121312',
        ]);
    }

    public function render()
    {
        $title = "Test";
        $users = User::all();
        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users,
        ]);
    }
}
