<?php
declare (strict_types = 1);

namespace think\pay;

class Collection extends \Yansongda\Supports\Collection
{

    /**
     * 创建 Collection 实例
     * @access public
     * @param  array $items 数据
     * @return static
     */
    public static function make($items = [])
    {
        return new static($items);
    }
}
