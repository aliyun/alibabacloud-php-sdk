<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticStrengthRequest extends Model
{
    /**
     * @description The instance types. The instance types specified by this parameter overwrite the instance types specified in the scaling configuration.
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The preemption policy that you want to apply to pay-as-you-go instances. The preemption policy specified by this parameter overwrites the preemption policy specified in the scaling configuration. Valid values:
     *
     *   NoSpot: The instances are created as regular pay-as-you-go instances.
     *   SpotWithPriceLimit: The instances are created as preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instances are created as preemptible instances for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * Default value: NoSpot.
     * @example NoSpot
     *
     * @var string
     */
    public $priorityStrategy;

    /**
     * @description The region ID of the scaling group.
     *
     * This parameter is required.
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The IDs of the scaling groups that you want to query.
     *
     * @var string[]
     */
    public $scalingGroupIds;

    /**
     * @description The categories of the system disks. The categories of the system disks specified by this parameter overwrite the categories of the system disks specified in the scaling configuration. Valid values:
     *
     *   cloud: basic disk.
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   cloud_essd: Enterprise SSD (ESSD).
     *
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
