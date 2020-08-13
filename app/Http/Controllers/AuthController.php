<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis' => '3103118018',
            'name' => 'Amin Febryansyah',
            'gender' => 'Male',
            'class' => 'XII RPL 1'
        ];
    }
}
