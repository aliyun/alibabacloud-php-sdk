<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo\price;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo\price\priceDetails\moduleDetails;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo\price\priceDetails\priceDetail;

class priceDetails extends Model
{
    /**
     * @var moduleDetails[]
     */
    public $moduleDetails;

    /**
     * @var int
     */
    public $orderItem;

    /**
     * @var priceDetail
     */
    public $priceDetail;
    protected $_name = [
        'moduleDetails' => 'ModuleDetails',
        'orderItem' => 'OrderItem',
        'priceDetail' => 'PriceDetail',
    ];

    public function validate()
    {
        if (\is_array($this->moduleDetails)) {
            Model::validateArray($this->moduleDetails);
        }
        if (null !== $this->priceDetail) {
            $this->priceDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleDetails) {
            if (\is_array($this->moduleDetails)) {
                $res['ModuleDetails'] = [];
                $n1 = 0;
                foreach ($this->moduleDetails as $item1) {
                    $res['ModuleDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->orderItem) {
            $res['OrderItem'] = $this->orderItem;
        }

        if (null !== $this->priceDetail) {
            $res['PriceDetail'] = null !== $this->priceDetail ? $this->priceDetail->toArray($noStream) : $this->priceDetail;
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
        if (isset($map['ModuleDetails'])) {
            if (!empty($map['ModuleDetails'])) {
                $model->moduleDetails = [];
                $n1 = 0;
                foreach ($map['ModuleDetails'] as $item1) {
                    $model->moduleDetails[$n1++] = moduleDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['OrderItem'])) {
            $model->orderItem = $map['OrderItem'];
        }

        if (isset($map['PriceDetail'])) {
            $model->priceDetail = priceDetail::fromMap($map['PriceDetail']);
        }

        return $model;
    }
}
