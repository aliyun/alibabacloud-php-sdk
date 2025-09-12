<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeElasticStrengthRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataDiskCategories;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @var string
     */
    public $priorityStrategy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string[]
     */
    public $scalingGroupIds;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'dataDiskCategories' => 'DataDiskCategories',
        'imageFamily' => 'ImageFamily',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'instanceTypes' => 'InstanceTypes',
        'ipv6AddressCount' => 'Ipv6AddressCount',
        'priorityStrategy' => 'PriorityStrategy',
        'regionId' => 'RegionId',
        'scalingGroupId' => 'ScalingGroupId',
        'scalingGroupIds' => 'ScalingGroupIds',
        'spotStrategy' => 'SpotStrategy',
        'systemDiskCategories' => 'SystemDiskCategories',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->dataDiskCategories)) {
            Model::validateArray($this->dataDiskCategories);
        }
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        if (\is_array($this->scalingGroupIds)) {
            Model::validateArray($this->scalingGroupIds);
        }
        if (\is_array($this->systemDiskCategories)) {
            Model::validateArray($this->systemDiskCategories);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiskCategories) {
            if (\is_array($this->dataDiskCategories)) {
                $res['DataDiskCategories'] = [];
                $n1 = 0;
                foreach ($this->dataDiskCategories as $item1) {
                    $res['DataDiskCategories'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->scalingGroupIds)) {
                $res['ScalingGroupIds'] = [];
                $n1 = 0;
                foreach ($this->scalingGroupIds as $item1) {
                    $res['ScalingGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->systemDiskCategories) {
            if (\is_array($this->systemDiskCategories)) {
                $res['SystemDiskCategories'] = [];
                $n1 = 0;
                foreach ($this->systemDiskCategories as $item1) {
                    $res['SystemDiskCategories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskCategories'])) {
            if (!empty($map['DataDiskCategories'])) {
                $model->dataDiskCategories = [];
                $n1 = 0;
                foreach ($map['DataDiskCategories'] as $item1) {
                    $model->dataDiskCategories[$n1] = $item1;
                    ++$n1;
                }
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
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1] = $item1;
                    ++$n1;
                }
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
                $model->scalingGroupIds = [];
                $n1 = 0;
                foreach ($map['ScalingGroupIds'] as $item1) {
                    $model->scalingGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['SystemDiskCategories'])) {
            if (!empty($map['SystemDiskCategories'])) {
                $model->systemDiskCategories = [];
                $n1 = 0;
                foreach ($map['SystemDiskCategories'] as $item1) {
                    $model->systemDiskCategories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
