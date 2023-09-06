<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\instanceTypes;

use AlibabaCloud\Tea\Model;

class instanceTypeInfo extends Model
{
    /**
     * @description The prefix of the hostname. You can query compute nodes that have a specified prefix.
     *
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @description The instance type of the node.
     *
     * @example ecs.sn1ne.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The protection period of the preemptible instance. Unit: hours. Valid values: 0 to 1. Default value: 1. A value of 0 means no protection period is specified.
     *
     * @example 0
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The interruption mode of the preemptible instance. Default value: Terminate. Set the value to Terminate, which indicates that the instance is released.
     *
     * @example Terminate
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description The maximum hourly price of the compute nodes. The value can be accurate to three decimal places. The parameter takes effect only when SpotStrategy is set to SpotWithPriceLimit.
     *
     * @example 0.062
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bidding method of the compute nodes. Valid values:
     *
     *   NoSpot: The compute nodes are pay-as-you-go instances.
     *   SpotWithPriceLimit: The compute nodes are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The compute nodes are preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'hostNamePrefix'           => 'HostNamePrefix',
        'instanceType'             => 'InstanceType',
        'spotDuration'             => 'SpotDuration',
        'spotInterruptionBehavior' => 'SpotInterruptionBehavior',
        'spotPriceLimit'           => 'SpotPriceLimit',
        'spotStrategy'             => 'SpotStrategy',
        'vSwitchId'                => 'VSwitchId',
        'zoneId'                   => 'ZoneId',
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
