<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class TransactionController extends Controller
{
    public function transactions()
    {
        $payments = Payment::all();
        return $payments;
    }
}
