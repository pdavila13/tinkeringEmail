<?php

namespace App\Mail;

use App\Providers\AuthServiceProvider;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Auth::loginUsingId(1);
        return $this->view('email.welcome')->with('username',Auth::user()->name);
    }

    public function subject($subject)
    {
        return 'welcome';
    }
}
