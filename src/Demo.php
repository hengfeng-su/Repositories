<?php
namespace HengFeng\Repositories;

use HengFeng\Repositories\Repository\Repository;

class Demo implements Repository
{
    public function test()
    {
        echo 'test-for-update';
    }
}