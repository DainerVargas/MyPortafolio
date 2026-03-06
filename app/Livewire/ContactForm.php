<?php

namespace App\Livewire;

use Livewire\Component;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $successMessage;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to('dainer2607@gmail.com')->send(new ContactMail(
            $this->name,
            $this->email,
            $this->subject,
            $this->message
        ));

        $this->reset(['name', 'email', 'subject', 'message']);

        $this->successMessage = __('Mensaje enviado con éxito. Te contactaré pronto.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
