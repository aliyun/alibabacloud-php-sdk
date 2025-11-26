<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems;

class saleControl extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var saleControlItems[]
     */
    public $saleControlItems;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'orderType' => 'OrderType',
        'saleControlItems' => 'SaleControlItems',
    ];

    public function validate()
    {
        if (\is_array($this->saleControlItems)) {
            Model::validateArray($this->saleControlItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->saleControlItems) {
            if (\is_array($this->saleControlItems)) {
                $res['SaleControlItems'] = [];
                $n1 = 0;
                foreach ($this->saleControlItems as $item1) {
                    $res['SaleControlItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['SaleControlItems'])) {
            if (!empty($map['SaleControlItems'])) {
                $model->saleControlItems = [];
                $n1 = 0;
                foreach ($map['SaleControlItems'] as $item1) {
                    $model->saleControlItems[$n1] = saleControlItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
