<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'hostNamePrefix' => 'HostNamePrefix',
        'vSwitchId'      => 'VSwitchId',
        'zoneId'         => 'ZoneId',
        'spotPriceLimit' => 'SpotPriceLimit',
        'instanceType'   => 'InstanceType',
        'spotStrategy'   => 'SpotStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        return $model;
    }
}
