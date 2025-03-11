<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeRdsCommodityRequest extends Model
{
    /**
     * @description The commodity code of the service.
     *
     * This parameter is required.
     * @example drdsPost
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * This parameter is required.
     * @example drds***********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The type of the order.
     *
     * @example 1
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'commodityCode'  => 'CommodityCode',
        'drdsInstanceId' => 'DrdsInstanceId',
        'orderType'      => 'OrderType',
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
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsCommodityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
