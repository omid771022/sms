<?php

namespace App\Http\Controllers;

use App\User;
use Kavenegar;
use Kavenegar\KavenegarApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SmsNotification;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

use Notification;


class SmsController extends Controller
{
    public function index()
    {
$result =  $receptor = ("09377689399");

        // $sender = "10004346";
        // $message = "ارسال پیامک ";
       
        // $result = Kavenegar::Send($sender, $receptor, $message);
   
        // $User = User::find(1);
   return  Notification::route('sms','09377689399')->notify(new SmsNotification($result));
        
    }
    }
