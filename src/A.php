<?php declare(strict_types=1);

namespace ThorJuhasz\Test;

class A
{
    protected ?int $value;

    public function getValue(): ?int
    {
        return $this->value;
    }
}
