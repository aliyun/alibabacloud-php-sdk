<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCommodityListResponseBody\data;

use AlibabaCloud\Tea\Model;

class commodityList extends Model
{
    /**
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example ecs
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;
    protected $_name = [
        'chargeType'    => 'ChargeType',
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        return $model;
    }
}
