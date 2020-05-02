<?php

namespace App\Notifications;

use App\User;
use Dotenv\Regex\Result;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Kavenegar\LaravelNotification\KavenegarChannel;
use NotificationChannels\SmsBroadcast\SmsBroadcastChannel;
use NotificationChannels\SmsBroadcast\SmsBroadcastMessage;

class SmsNotification extends Notification
{
    use Queueable ;


    // protected $user;
    // public function __construct(User $user)
    // {
    //     $this->user=$user;
    // }

    public function via($notifiable)
    {
        return [KavenegarChannel::class];
    }

    public function toSMS($notifiable){


        
        return ' پیامک امد ';
        
        }

}
