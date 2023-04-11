<?php

namespace Agi4648\Permissions;

class Person implements IPerson
{

    protected $firstname;
    protected $surname;

    public function __construct(string $firstname, string $surname)
    {
        $this->surname = $surname;
        $this->firstname = $firstname;

    }

    public function getName(): string
    {
        return "$this->firstname $this->surname";
    }
}