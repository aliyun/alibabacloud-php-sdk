<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\storage\oss;

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
        if (null !== $this->oss) {
            $this->oss->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullyManaged) {
            $res['FullyManaged'] = $this->fullyManaged;
        }

        if (null !== $this->orderState) {
            $res['OrderState'] = $this->orderState;
        }

        if (null !== $this->oss) {
            $res['Oss'] = null !== $this->oss ? $this->oss->toArray($noStream) : $this->oss;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
