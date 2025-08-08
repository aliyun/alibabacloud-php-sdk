<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\orderPeriods\orderPeriod;

class orderPeriods extends Model
{
    /**
     * @var orderPeriod[]
     */
    public $orderPeriod;
    protected $_name = [
        'orderPeriod' => 'OrderPeriod',
    ];

    public function validate()
    {
        if (\is_array($this->orderPeriod)) {
            Model::validateArray($this->orderPeriod);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderPeriod) {
            if (\is_array($this->orderPeriod)) {
                $res['OrderPeriod'] = [];
                $n1 = 0;
                foreach ($this->orderPeriod as $item1) {
                    $res['OrderPeriod'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['OrderPeriod'])) {
            if (!empty($map['OrderPeriod'])) {
                $model->orderPeriod = [];
                $n1 = 0;
                foreach ($map['OrderPeriod'] as $item1) {
                    $model->orderPeriod[$n1] = orderPeriod::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
