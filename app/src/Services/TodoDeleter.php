<?php

namespace App\Services;

use App\Entity\Todo;
use Doctrine\ORM\EntityManagerInterface;

class TodoDeleter
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function deleteTodo(Todo $todo)
    {
        $this->entityManager->remove($todo);
        $this->entityManager->flush();
    }
}
