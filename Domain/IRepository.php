<?php

namespace domain;

interface IRepository
{
    public function create($object);
    public function get($object): string;
    public function getAll($Objects);
    public function update($object);
    public function delete($object);
}
