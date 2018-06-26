<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'Author'], function($message) {
            $message -> to('erke.zhumagali@gmail.com', 'To author of project') -> subject('Test email');
            $message -> from('erkebulanzhumagali@gmail.com', 'Erkebulan');
        });
    }
}
