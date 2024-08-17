<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction_model;

class transaction_controller extends Controller
{
    //
    public function index(){
        $transaction = $transaction::get();
        if ($transaction){

        }
        else(
            return response() -> json(['message' => 'no record'], 200)
        )
    }
    public function store(){

    }
}
