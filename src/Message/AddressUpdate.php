<?php

namespace App\Message;

class AddressUpdate {

    public function __construct(
        private int $test
    )
    {
        $this->test = $test;
    }

    public function getTest(): int
    {
        return $this->test;
    }
}
