<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticStrengthRequest extends Model
{
    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $priorityStrategy;

    /**
     * @description This parameter is required.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string[]
     */
    public $scalingGroupIds;

    /**
     * @var string[]
     */
    public $systemDiskCategories;
    protected $_name = [
        'instanceTypes'        => 'InstanceTypes',
        'priorityStrategy'     => 'PriorityStrategy',
        'regionId'             => 'RegionId',
        'scalingGroupId'       => 'ScalingGroupId',
        'scalingGroupIds'      => 'ScalingGroupIds',
        'systemDiskCategories' => 'SystemDiskCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->priorityStrategy) {
            $res['PriorityStrategy'] = $this->priorityStrategy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingGroupIds) {
            $res['ScalingGroupIds'] = $this->scalingGroupIds;
        }
        if (null !== $this->systemDiskCategories) {
            $res['SystemDiskCategories'] = $this->systemDiskCategories;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticStrengthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['PriorityStrategy'])) {
            $model->priorityStrategy = $map['PriorityStrategy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingGroupIds'])) {
            if (!empty($map['ScalingGroupIds'])) {
                $model->scalingGroupIds = $map['ScalingGroupIds'];
            }
        }
        if (isset($map['SystemDiskCategories'])) {
            if (!empty($map['SystemDiskCategories'])) {
                $model->systemDiskCategories = $map['SystemDiskCategories'];
            }
        }

        return $model;
    }
}
