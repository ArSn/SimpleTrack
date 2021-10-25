<?php

namespace application;


use domain\IRepository;

class UserService
{
    private IRepository $_repository;

    public function __construct($IRepository)
    {
        $this->_repository = $IRepository;
    }

    public function get($object): string
    {
        return $this->_repository->get($object);

        unset($_repository);
    }
}
