<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeStacksResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeStacksResponseBody\stacks\stack;
use AlibabaCloud\Tea\Model;

class stacks extends Model
{
    /**
     * @var stack[]
     */
    public $stack;
    protected $_name = [
        'stack' => 'Stack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stack) {
            $res['Stack'] = [];
            if (null !== $this->stack && \is_array($this->stack)) {
                $n = 0;
                foreach ($this->stack as $item) {
                    $res['Stack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stack'])) {
            if (!empty($map['Stack'])) {
                $model->stack = [];
                $n            = 0;
                foreach ($map['Stack'] as $item) {
                    $model->stack[$n++] = null !== $item ? stack::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
