<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PaymentChoice;

class PaymentPlatformController extends Controller
{
    public function selectPaymentPlatform(PaymentChoice $payment_choice,  Request $request)
    {
        $payment_platform = $request->get('platform');
        $method = $request->get('method');

        if($method == 'transfer')
            return $payment_choice->transfer(123456789, 3000);

        return $payment_choice->bankMethod('GTB', 123456789, 3000);
    }
}
