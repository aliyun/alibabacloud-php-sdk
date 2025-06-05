<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo\spotPrices;

use AlibabaCloud\Dara\Model;

class spotPrice extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var float
     */
    public $originPrice;

    /**
     * @var float
     */
    public $spotPrice;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'originPrice' => 'OriginPrice',
        'spotPrice' => 'SpotPrice',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }

        if (null !== $this->spotPrice) {
            $res['SpotPrice'] = $this->spotPrice;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }

        if (isset($map['SpotPrice'])) {
            $model->spotPrice = $map['SpotPrice'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
