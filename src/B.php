<?php declare(strict_types=1);

namespace ThorJuhasz\Test;

class B extends A
{
    public function getValue(): int
    {
        return parent::getValue();
    }
}
