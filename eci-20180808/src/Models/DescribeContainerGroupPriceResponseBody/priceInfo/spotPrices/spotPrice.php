<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo\spotPrices;

use AlibabaCloud\Tea\Model;

class spotPrice extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var float
     */
    public $spotPrice;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var float
     */
    public $originPrice;
    protected $_name = [
        'zoneId'       => 'ZoneId',
        'spotPrice'    => 'SpotPrice',
        'instanceType' => 'InstanceType',
        'originPrice'  => 'OriginPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->spotPrice) {
            $res['SpotPrice'] = $this->spotPrice;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SpotPrice'])) {
            $model->spotPrice = $map['SpotPrice'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }

        return $model;
    }
}
