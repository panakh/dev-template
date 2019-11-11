<?php

namespace spec\App\Services;

use App\Entity\Todo;
use App\Services\TodoDeleter;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;

class TodoDeleterSpec extends ObjectBehavior
{
    function let(EntityManagerInterface $entityManager)
    {
        $this->beConstructedWith($entityManager);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TodoDeleter::class);
    }

    function it_deletes_a_todo(Todo $todo, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($todo)->shouldBeCalled();
        $entityManager->flush()->shouldBeCalled();
        $this->deleteTodo($todo);
    }
}
