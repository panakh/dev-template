<?php

namespace spec\App\Entity;

use App\Entity\Todo;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class TodoSpec
 * @package spec\App\Entity
 * @mixin Todo
 */
class TodoSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('buy milk');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Todo::class);
    }

    function it_has_description()
    {
        $this->getDescription()->shouldBe('buy milk');
    }

    function it_can_be_done()
    {
        $this->markAsDone();
        $this->shouldBeDone();
    }

    function it_should_not_be_done_initially()
    {
        $this->shouldNotBeDone();
    }
}
