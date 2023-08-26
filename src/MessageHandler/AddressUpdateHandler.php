<?php

namespace App\MessageHandler;

use App\Message\AddressUpdate;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class AddressUpdateHandler {


    public function __invoke(AddressUpdate $message)
    {
        // silence
    }
}
