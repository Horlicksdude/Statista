<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FizzBuzzController extends AbstractController
{
    #[Route('/fizz/buzz', name: 'fizz_buzz')]
    public function index(): Response
    {
        $html = array_reduce(range(1, 100), function($html, $num) {
		if (!($num % 3) && !($num % 5)) {
			$result = 'fizzbuzz';
		} else if (!($num % 3)) {
			$result = 'fizz';
		} else if (!($num % 5)) {
			$result = 'buzz';
		} else {
			$result = $num;
		}
		return $html."<li>$result</li>";
	}, '');

	return new Response(
	       '<html><head><title>Fizzbuzz Programme</title></head><body><ul>'.$html.'</ul></body></html>'	
	);
    }
}
