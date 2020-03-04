<?php

namespace App\Listeners;

use App\Events\ClientSenMessageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use function foo\func;

class SendEmailForAdminLitener
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
     * @param  ClientSenMessageEvent  $event
     * @return void
     */
    public function handle(ClientSenMessageEvent $event)
    {
        $data = $event->data;
        Mail::send('emails.sendMailForAdmin' , ['data' => $data] , function ($msg) {
            $msg->from('ali.hamrani80@gmail.com');
            $msg->to('ali.hamrani80@gmail.com')->subject('پیغام جدید alihamrani.ir');
        });
    }
}
