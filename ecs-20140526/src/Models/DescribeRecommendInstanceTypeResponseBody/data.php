<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\instanceType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\zones;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var zones[]
     */
    public $zones;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $priority;

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
        'priority'           => 'Priority',
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
            $res['Zones'] = [];
            if (null !== $this->zones && \is_array($this->zones)) {
                $n = 0;
                foreach ($this->zones as $item) {
                    $res['Zones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n            = 0;
                foreach ($map['Zones'] as $item) {
                    $model->zones[$n++] = null !== $item ? zones::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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
