<?php
namespace HengFeng\Repositories;

use HengFeng\Repositories\Repository\Resp;

class Demo implements Resp
{
    public function doSome()
    {
        echo 'test-for-update';
    }
}