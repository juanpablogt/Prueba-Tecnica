<?php

namespace App\Controller;

use App\Entity\Review;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiReviewController extends AbstractController
{
    #[Route('/api/reviews', name: 'api_reviews_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em, BookRepository $bookRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Validar campos obligatorios
        if (!isset($data['rating'], $data['comment'], $data['book_id'])) {
            return $this->json(['error' => 'Missing fields'], 400);
        }

        $rating = (int) $data['rating'];
        $comment = trim($data['comment']);
        $bookId = (int) $data['book_id'];

        // Validar rating
        if ($rating < 1 || $rating > 5) {
            return $this->json(['error' => 'Rating must be between 1 and 5'], 400);
        }

        // Validar comment
        if (empty($comment)) {
            return $this->json(['error' => 'Comment cannot be empty'], 400);
        }

        // Validar libro
        $book = $bookRepository->find($bookId);
        if (!$book) {
            return $this->json(['error' => 'Book not found'], 404);
        }

        // Crear Review
        $review = new Review();
        $review->setRating($rating);
        $review->setComment($comment);
        $review->setBook($book);
        $review->setCreatedAt(new \DateTime());

        $em->persist($review);
        $em->flush();

        return $this->json(['message' => 'Review created successfully']);
    }
}
