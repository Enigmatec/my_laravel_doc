<?php

namespace App\Payment;

use App\Contracts\PaymentChoice;

class FlutterWave implements PaymentChoice {

    private $api_key;
    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    public function transfer($account_no, $amount)
    {
        $charges = 10;
        return [
            'destination_act' => $account_no,
            'amount' => $amount + $charges,
            'payment_platform' => 'flutterwave',
            'type' => 'transfer'
        ];
    }

    public function bankMethod($bank_name, $account_no, $amount)
    {
        $charges = 5;
        return [
            'bank_name'  => $bank_name,
            'destination_act' => $account_no,
            'amount' => $amount + $charges,
            'payment_platform' => 'flutterwave',
            'type' => 'bank'
        ];
    }

}
