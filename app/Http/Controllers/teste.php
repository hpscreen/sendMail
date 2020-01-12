<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class teste extends Controller
{
    public function teste(Request $request){
        $detail = new \stdClass();
        $detail->name = "HPS";
        $detail->teste=  "Hacker Planet Screen Teste";

        dd(Mail::to('hps@hpscreen.com.br')->send(new SendMail($detail)));
    }
}
