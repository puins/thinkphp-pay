<?php
declare (strict_types = 1);

namespace think\exception;

use think\Exception;

class OrderException extends Exception
{
    public function __construct($msg = "", $code = 0, $data = [])
    {
        $this->msg = $msg;
        $this->code = $code;
        $this->data = $data;
    }

}
