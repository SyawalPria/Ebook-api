<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return "NIS : 3103 118 131,
                Name : Syawal Priambodho,
                Gender : Male,
                Phone : 0857 4792 5843,
                Class : XII RPL 4";
    }
}