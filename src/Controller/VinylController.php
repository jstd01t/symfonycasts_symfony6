<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('Yo');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = ucwords(str_replace('-', ' ', $slug));
        } else {
            $title = 'All Genres';
        }
        return new Response('Genre: ' . $title);
    }


}