<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;


final class TestController extends AbstractController
{
	#[Route('/test', name: 'app_test')]
	public function test()
	{
		return $this->render('test.html.twig');
	}
}