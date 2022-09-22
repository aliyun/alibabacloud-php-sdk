<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class orderParams extends Model
{
    /**
     * @var string[]
     */
    public $orderParam;
    protected $_name = [
        'orderParam' => 'OrderParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderParam) {
            $res['OrderParam'] = $this->orderParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderParam'])) {
            if (!empty($map['OrderParam'])) {
                $model->orderParam = $map['OrderParam'];
            }
        }

        return $model;
    }
}
