<?php
declare(strict_types=1);

namespace think\facade;

use think\Facade;

/**
 * Class Pay
 * @package think\facade
 * @mixin \think\Pay
 */
class Pay extends Facade
{
    protected static function getFacadeClass()
    {
        return \think\Pay::class;
    }
}
