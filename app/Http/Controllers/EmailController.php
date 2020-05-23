<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;

class EmailController extends Controller
{
    //
    public function sendEmail()
    {
       $emailJob = (new SendEmailJob())->delay(Carbon::now()->addSeconds(5));
       dispatch($emailJob);

       echo 'email sent';
    }
}
