<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\instanceType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones;
use AlibabaCloud\Tea\Model;

class recommendInstanceType extends Model
{
    /**
     * @var zones
     */
    public $zones;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var instanceType
     */
    public $instanceType;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceChargeType;
    protected $_name = [
        'zones'              => 'Zones',
        'commodityCode'      => 'CommodityCode',
        'zoneId'             => 'ZoneId',
        'priority'           => 'Priority',
        'networkType'        => 'NetworkType',
        'instanceType'       => 'InstanceType',
        'scene'              => 'Scene',
        'spotStrategy'       => 'SpotStrategy',
        'regionId'           => 'RegionId',
        'instanceChargeType' => 'InstanceChargeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = null !== $this->instanceType ? $this->instanceType->toMap() : null;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
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
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = instanceType::fromMap($map['InstanceType']);
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        return $model;
    }
}
