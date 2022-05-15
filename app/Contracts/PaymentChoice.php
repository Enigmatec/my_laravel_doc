<?php

namespace App\Contracts;

interface PaymentChoice {

    public function transfer(int $account_no, float $amount);

    public function bankMethod(string $bank_name, int $account_no, float $amount);
}
