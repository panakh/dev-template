<?php

namespace spec\App\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TodoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Entity\Todo');
    }
}
