<?php

namespace App\Controller;

use App\Message\AddressUpdate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/')]
    public function index(MessageBusInterface $bus): Response
    {
        dump($_ENV['MESSENGER_TRANSPORT_DSN']);
        $bus->dispatch(new AddressUpdate(1337));
        // ...
    }
}
