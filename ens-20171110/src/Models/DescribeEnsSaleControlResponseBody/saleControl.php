<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems;
use AlibabaCloud\Tea\Model;

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
        'commodityCode'    => 'CommodityCode',
        'orderType'        => 'OrderType',
        'saleControlItems' => 'SaleControlItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->saleControlItems) {
            $res['SaleControlItems'] = [];
            if (null !== $this->saleControlItems && \is_array($this->saleControlItems)) {
                $n = 0;
                foreach ($this->saleControlItems as $item) {
                    $res['SaleControlItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleControl
     */
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
                $n                       = 0;
                foreach ($map['SaleControlItems'] as $item) {
                    $model->saleControlItems[$n++] = null !== $item ? saleControlItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
