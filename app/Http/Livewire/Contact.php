<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{

    public $first_name;
    public $last_name;
    public $password;
    public $message;

    public function render()
    {
        return view('livewire.contact');
    }

    public function submitForm()
    {
        $contact['last_name'] = $this->last_name;
        $contact['first_name'] = $this->first_name;
        $contact['password'] = $this->password;
        session()->flash('success_message', 'Post successfully updated.');
        $this->resetForm();
        
    }

    public function resetForm()
    {

        $this->first_name= '';
        $this->last_name= '';
        $this->passwrd = '';
        $this->message = '';  
    }
}
