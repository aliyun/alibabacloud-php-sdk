<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansResponseBody\plans;
use AlibabaCloud\Tea\Model;

class ListOperationPlansResponseBody extends Model
{
    /**
     * @description The operation plans.
     *
     * @var plans[]
     */
    public $plans;
    protected $_name = [
        'plans' => 'plans',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plans) {
            $res['plans'] = [];
            if (null !== $this->plans && \is_array($this->plans)) {
                $n = 0;
                foreach ($this->plans as $item) {
                    $res['plans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOperationPlansResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['plans'])) {
            if (!empty($map['plans'])) {
                $model->plans = [];
                $n            = 0;
                foreach ($map['plans'] as $item) {
                    $model->plans[$n++] = null !== $item ? plans::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
