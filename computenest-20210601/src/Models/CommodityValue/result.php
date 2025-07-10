<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\coupons;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\order;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders;

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
        'order' => 'Order',
        'inquiryType' => 'InquiryType',
        'subOrders' => 'SubOrders',
        'coupons' => 'Coupons',
    ];

    public function validate()
    {
        if (null !== $this->order) {
            $this->order->validate();
        }
        if (null !== $this->subOrders) {
            $this->subOrders->validate();
        }
        if (\is_array($this->coupons)) {
            Model::validateArray($this->coupons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toArray($noStream) : $this->order;
        }

        if (null !== $this->inquiryType) {
            $res['InquiryType'] = $this->inquiryType;
        }

        if (null !== $this->subOrders) {
            $res['SubOrders'] = null !== $this->subOrders ? $this->subOrders->toArray($noStream) : $this->subOrders;
        }

        if (null !== $this->coupons) {
            if (\is_array($this->coupons)) {
                $res['Coupons'] = [];
                $n1 = 0;
                foreach ($this->coupons as $item1) {
                    $res['Coupons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['Coupons'] as $item1) {
                    $model->coupons[$n1] = coupons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
