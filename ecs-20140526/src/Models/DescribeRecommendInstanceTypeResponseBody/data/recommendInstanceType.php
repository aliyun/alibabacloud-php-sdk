<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\instanceType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones;
use AlibabaCloud\Tea\Model;

class recommendInstanceType extends Model
{
    /**
     * @description The commodity code of the instance type.
     *
     * @example ecs
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The billing method of the instances of the instance type.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The name of the instance type.
     *
     * @var instanceType
     */
    public $instanceType;

    /**
     * @description The network type of the ECS instance.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The sorting priority.
     *
     * @example 2
     *
     * @var int
     */
    public $priority;

    /**
     * @description The region ID of the instance type.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates the scenario in which the instance type was recommended.
     *
     * @example CREATE
     *
     * @var string
     */
    public $scene;

    /**
     * @description The preemption policy for the preemptible instance.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The zone ID of the instance type.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description Details of the zones where the alternative instance types are available.
     *
     * @var zones
     */
    public $zones;
    protected $_name = [
        'commodityCode'      => 'CommodityCode',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceType'       => 'InstanceType',
        'networkType'        => 'NetworkType',
        'priority'           => 'Priority',
        'regionId'           => 'RegionId',
        'scene'              => 'Scene',
        'spotStrategy'       => 'SpotStrategy',
        'zoneId'             => 'ZoneId',
        'zones'              => 'Zones',
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
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = null !== $this->instanceType ? $this->instanceType->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendInstanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = instanceType::fromMap($map['InstanceType']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }

        return $model;
    }
}
