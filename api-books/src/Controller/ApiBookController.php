<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiBookController extends AbstractController
{
    #[Route('/api/books', name: 'api_books', methods: ['GET'])]
    public function index(BookRepository $bookRepository): JsonResponse
    {
        $books = $bookRepository->findAll();

        $data = [];

        foreach ($books as $book) {
            $reviews = $book->getReviews();
            $totalRating = 0;
            $count = 0;

            foreach ($reviews as $review) {
                $totalRating += $review->getRating();
                $count++;
            }

            $averageRating = $count > 0 ? round($totalRating / $count, 1) : null;

            $data[] = [
                'title' => $book->getTitle(),
                'author' => $book->getAuthor(),
                'published_year' => $book->getPublishedYear(),
                'average_rating' => $averageRating,
            ];
        }

        return $this->json($data);
    }
}
