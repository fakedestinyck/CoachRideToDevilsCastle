<?php

namespace App\Listeners;

use App\Events\JoinRoom;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class JoinRoomListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  JoinRoom  $event
     * @return void
     */
    public function handle(JoinRoom $event)
    {
        //
    }
}
