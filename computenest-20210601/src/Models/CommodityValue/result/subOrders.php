<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders\subOrder;
use AlibabaCloud\Tea\Model;

class subOrders extends Model
{
    /**
     * @description 订单子项。
     *
     * @var subOrder[]
     */
    public $subOrder;
    protected $_name = [
        'subOrder' => 'SubOrder',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subOrder) {
            $res['SubOrder'] = [];
            if (null !== $this->subOrder && \is_array($this->subOrder)) {
                $n = 0;
                foreach ($this->subOrder as $item) {
                    $res['SubOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubOrder'])) {
            if (!empty($map['SubOrder'])) {
                $model->subOrder = [];
                $n = 0;
                foreach ($map['SubOrder'] as $item) {
                    $model->subOrder[$n++] = null !== $item ? subOrder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
