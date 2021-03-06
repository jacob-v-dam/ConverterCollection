<?php

namespace Console;

class Argument
{
    /** @var array */
    private $args;

    public function __construct(array $args)
    {
        array_shift($args);
        $this->args = $args;
    }

    /** @return array */
    public function getArgs()
    {
        return $this->args;
    }

    public function first()
    {
        return reset($this->args);
    }

    public function moveOneUp()
    {
        return new self($this->args);
    }
}
