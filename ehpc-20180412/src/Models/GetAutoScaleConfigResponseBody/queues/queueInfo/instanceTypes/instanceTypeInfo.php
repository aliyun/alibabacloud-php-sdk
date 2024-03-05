<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\instanceTypes;

use AlibabaCloud\Tea\Model;

class instanceTypeInfo extends Model
{
    /**
     * @description The type of the data disk. Valid values:
     *
     * - cloud: basic disk
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @description Indicates whether the data disk is encrypted. Valid values:
     *
     * - false
     * @example ecs.sn1ne.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The list of data disks.
     *
     * @example 0
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The minimum number of compute nodes that can be added in each round of an auto scale-out task. Valid values: 1 to 99.
     *
     * > The configuration takes effect only for the minimum compute nodes that can be added in the current round.
     * @example Terminate
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description The performance level of the ESSD used as the data disk. The parameter takes effect only when the DataDisks.N.DataDiskCategory parameter is set to cloud_essd. Valid values:
     *
     * - PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     * @example 0.062
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The KMS key ID of the data disk.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The capacity of the data disk. Unit: GB.
     *
     * Valid values: 40 to 500.
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Indicates whether the data disk is released when the node is released. Valid values:
     *
     * - false
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
