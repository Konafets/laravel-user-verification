<?php

namespace Jrean\UserVerification\Listeners;

use Illuminate\Auth\Events\Registered;
use Jrean\UserVerification\Facades\UserVerification;

class SendVerificationEmail
{
    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        UserVerification::generate($event->user);
        UserVerification::send($event->user);
    }
}