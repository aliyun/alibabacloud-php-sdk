<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class SpotBidPrice extends Model
{
    /**
     * @description 实例的每小时最高出价。支持最大3位小数，参数SpotStrategy=SpotWithPriceLimit时，该参数生效。
     *
     * @example 1000.0
     *
     * @var float
     */
    public $bidPrice;

    /**
     * @description 实例类型。
     *
     * @example ecs.g7.2xlarge
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'bidPrice'     => 'BidPrice',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bidPrice) {
            $res['BidPrice'] = $this->bidPrice;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SpotBidPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BidPrice'])) {
            $model->bidPrice = $map['BidPrice'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
