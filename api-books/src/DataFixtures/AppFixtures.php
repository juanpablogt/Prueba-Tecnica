<?php

namespace App\DataFixtures;

use App\Entity\Book;
use App\Entity\Review;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Crear libros
        $book1 = new Book();
        $book1->setTitle('El Arte de Programar');
        $book1->setAuthor('Donald Knuth');
        $book1->setPublishedYear(1968);
        $manager->persist($book1);

        $book2 = new Book();
        $book2->setTitle('Clean Code');
        $book2->setAuthor('Robert C. Martin');
        $book2->setPublishedYear(2008);
        $manager->persist($book2);

        $book3 = new Book();
        $book3->setTitle('Refactoring');
        $book3->setAuthor('Martin Fowler');
        $book3->setPublishedYear(1999);
        $manager->persist($book3);

        // Crear reseñas
        $reviewsData = [
            [$book1, 5, 'Excelente libro para programadores avanzados'],
            [$book1, 4, 'Muy completo, aunque difícil'],
            [$book2, 5, 'Obligatorio para escribir buen código'],
            [$book2, 4, 'Muy útil, aunque denso'],
            [$book3, 5, 'Gran guía para mejorar código existente'],
            [$book3, 3, 'Útil pero algunos ejemplos son antiguos'],
        ];

        foreach ($reviewsData as [$book, $rating, $comment]) {
            $review = new Review();
            $review->setBook($book);
            $review->setRating($rating);
            $review->setComment($comment);
            $review->setCreatedAt(new \DateTime());
            $manager->persist($review);
        }

        $manager->flush();
    }
}
