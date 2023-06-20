<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @example {"components":{"package_version":"yuncode12928000016"},"duration":1,"pricingCycle":"YEAR","productCode":"cmgj01**28","quantity":1,"skuCode":"prepay"}
     *
     * @var string
     */
    public $commodity;

    /**
     * @example INSTANCE_BUY
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'commodity' => 'Commodity',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodity) {
            $res['Commodity'] = $this->commodity;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commodity'])) {
            $model->commodity = $map['Commodity'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
