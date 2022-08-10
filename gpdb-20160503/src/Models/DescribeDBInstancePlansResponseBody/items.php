<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody\items\plan;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var plan[]
     */
    public $plan;
    protected $_name = [
        'plan' => 'Plan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plan) {
            $res['Plan'] = [];
            if (null !== $this->plan && \is_array($this->plan)) {
                $n = 0;
                foreach ($this->plan as $item) {
                    $res['Plan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Plan'])) {
            if (!empty($map['Plan'])) {
                $model->plan = [];
                $n           = 0;
                foreach ($map['Plan'] as $item) {
                    $model->plan[$n++] = null !== $item ? plan::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
