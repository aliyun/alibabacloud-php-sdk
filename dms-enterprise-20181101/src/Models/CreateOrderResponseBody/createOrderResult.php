<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderResponseBody;

use AlibabaCloud\Dara\Model;

class createOrderResult extends Model
{
    /**
     * @var int[]
     */
    public $orderIds;
    protected $_name = [
        'orderIds' => 'OrderIds',
    ];

    public function validate()
    {
        if (\is_array($this->orderIds)) {
            Model::validateArray($this->orderIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderIds) {
            if (\is_array($this->orderIds)) {
                $res['OrderIds'] = [];
                $n1              = 0;
                foreach ($this->orderIds as $item1) {
                    $res['OrderIds'][$n1++] = $item1;
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
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = [];
                $n1              = 0;
                foreach ($map['OrderIds'] as $item1) {
                    $model->orderIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
