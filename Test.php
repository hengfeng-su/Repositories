<?php
class TestToSome implements \HengFeng\Repositories\Repository\Resp
{
    public function doSome()
    {
        echo 'test';
    }
}

$test = new TestToSome();
$test->doSome();