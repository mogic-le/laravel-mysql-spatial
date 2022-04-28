<?php

namespace Stubs;

class PDOStub extends \PDO
{
    public function __construct()
    {
    }

    public function getAttribute(int $attribute): mixed
    {
        return match ($attribute) {
            self::ATTR_SERVER_VERSION => '8.0',
            default => parent::getAttribute($attribute),
        };
    }
}
