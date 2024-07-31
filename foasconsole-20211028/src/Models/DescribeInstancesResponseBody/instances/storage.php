<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\storage\oss;
use AlibabaCloud\Tea\Model;

class storage extends Model
{
    /**
     * @var bool
     */
    public $fullyManaged;

    /**
     * @var string
     */
    public $orderState;

    /**
     * @var oss
     */
    public $oss;
    protected $_name = [
        'fullyManaged' => 'FullyManaged',
        'orderState'   => 'OrderState',
        'oss'          => 'Oss',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullyManaged) {
            $res['FullyManaged'] = $this->fullyManaged;
        }
        if (null !== $this->orderState) {
            $res['OrderState'] = $this->orderState;
        }
        if (null !== $this->oss) {
            $res['Oss'] = null !== $this->oss ? $this->oss->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullyManaged'])) {
            $model->fullyManaged = $map['FullyManaged'];
        }
        if (isset($map['OrderState'])) {
            $model->orderState = $map['OrderState'];
        }
        if (isset($map['Oss'])) {
            $model->oss = oss::fromMap($map['Oss']);
        }

        return $model;
    }
}
