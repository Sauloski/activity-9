<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail; // Importar Facade
use App\Mail\LoginAlert; // Importar Mailable

class SendLoginAlert
{
    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        Mail::to($event->user->email)->send(new LoginAlert($event->user));
    }
}