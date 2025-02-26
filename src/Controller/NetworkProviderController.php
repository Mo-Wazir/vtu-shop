<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class NetworkProviderController extends AbstractController
{
	#[Route('/networks', name: 'app_recharge')]
	public function index(): Response
	{
		return $this->render('network_provider.html.twig', [
			'networks' => [
			'mtn', 
			'airtel', 
			'9mobile', 
			'glo'
			]
		]);

	}

}


//php -S 127.0.0.1:8000 -t public/