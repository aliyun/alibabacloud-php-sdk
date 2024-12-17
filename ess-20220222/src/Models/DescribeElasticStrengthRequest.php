<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticStrengthRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataDiskCategories;

    /**
     * @example CentOS7
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @example centos6u5_64_20G_aliaegis****.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @example ubuntu_18_04_x64_20G_alibase_20231225.vhd
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The instance types. The instance types specified by this parameter overwrite the instance types specified in the scaling configuration.
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

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
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

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

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'dataDiskCategories'   => 'DataDiskCategories',
        'imageFamily'          => 'ImageFamily',
        'imageId'              => 'ImageId',
        'imageName'            => 'ImageName',
        'instanceTypes'        => 'InstanceTypes',
        'ipv6AddressCount'     => 'Ipv6AddressCount',
        'priorityStrategy'     => 'PriorityStrategy',
        'regionId'             => 'RegionId',
        'scalingGroupId'       => 'ScalingGroupId',
        'scalingGroupIds'      => 'ScalingGroupIds',
        'spotStrategy'         => 'SpotStrategy',
        'systemDiskCategories' => 'SystemDiskCategories',
        'vSwitchIds'           => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskCategories) {
            $res['DataDiskCategories'] = $this->dataDiskCategories;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
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
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->systemDiskCategories) {
            $res['SystemDiskCategories'] = $this->systemDiskCategories;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
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
        if (isset($map['DataDiskCategories'])) {
            if (!empty($map['DataDiskCategories'])) {
                $model->dataDiskCategories = $map['DataDiskCategories'];
            }
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
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
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SystemDiskCategories'])) {
            if (!empty($map['SystemDiskCategories'])) {
                $model->systemDiskCategories = $map['SystemDiskCategories'];
            }
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
