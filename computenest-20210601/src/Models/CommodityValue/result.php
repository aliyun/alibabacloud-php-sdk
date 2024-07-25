<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\coupons;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\order;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var order
     */
    public $order;

    /**
     * @var string
     */
    public $inquiryType;

    /**
     * @var subOrders
     */
    public $subOrders;

    /**
     * @var coupons[]
     */
    public $coupons;
    protected $_name = [
        'order'       => 'Order',
        'inquiryType' => 'InquiryType',
        'subOrders'   => 'SubOrders',
        'coupons'     => 'Coupons',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toMap() : null;
        }
        if (null !== $this->inquiryType) {
            $res['InquiryType'] = $this->inquiryType;
        }
        if (null !== $this->subOrders) {
            $res['SubOrders'] = null !== $this->subOrders ? $this->subOrders->toMap() : null;
        }
        if (null !== $this->coupons) {
            $res['Coupons'] = [];
            if (null !== $this->coupons && \is_array($this->coupons)) {
                $n = 0;
                foreach ($this->coupons as $item) {
                    $res['Coupons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
        }
        if (isset($map['InquiryType'])) {
            $model->inquiryType = $map['InquiryType'];
        }
        if (isset($map['SubOrders'])) {
            $model->subOrders = subOrders::fromMap($map['SubOrders']);
        }
        if (isset($map['Coupons'])) {
            if (!empty($map['Coupons'])) {
                $model->coupons = [];
                $n              = 0;
                foreach ($map['Coupons'] as $item) {
                    $model->coupons[$n++] = null !== $item ? coupons::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
