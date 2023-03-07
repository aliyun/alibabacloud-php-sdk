<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListAvailableEcsTypesRequest extends Model
{
    /**
     * @description The billing method of the ECS instances. Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description Specifies whether the ECS instances are sold out. Valid values:
     *
     *   false: available
     *   true: sold out
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $showSoldOut;

    /**
     * @description The preemption policy of the ECS instances. Valid values:
     *
     *   NoSpot: The ECS instances are pay-as-you-go instances.
     *   SpotWithPriceLimit: The ECS instances are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The ECS instances are preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceChargeType' => 'InstanceChargeType',
        'showSoldOut'        => 'ShowSoldOut',
        'spotStrategy'       => 'SpotStrategy',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->showSoldOut) {
            $res['ShowSoldOut'] = $this->showSoldOut;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvailableEcsTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['ShowSoldOut'])) {
            $model->showSoldOut = $map['ShowSoldOut'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
